<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Smalot\PdfParser\Parser;

class PdfToolController extends Controller
{
    public function index()
    {
        return view('backend.tools.pdf_tools');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $filename = 'upload_' . time() . '.' . $file->getClientOriginalExtension();

            // Tujuan: public_html/storage/dokumen/proses_tandatangan/
            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/dokumen/proses_tandatangan/';
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true); // buat folder jika belum ada
            }

            // Pindahkan file
            $file->move($destinationPath, $filename);

            // Ambil nomor surat (misal baris pertama PDF)
            $reader = new \Smalot\PdfParser\Parser();
            $pdf = $reader->parseFile($destinationPath . $filename);
            $text = $pdf->getText();
            preg_match('/Nomor Surat\s*:\s*(.+)/i', $text, $matches);
            $nomorSurat = $matches[1] ?? 'NOMOR-TIDAK-DITEMUKAN';

            return response()->json([
                'success' => true,
                'path' => '/storage/dokumen/proses_tandatangan/' . $filename,
                'filename' => $filename,
                'nomor_surat' => $nomorSurat
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Tidak ada file yang diunggah.'], 400);
    }

    public function save(Request $request)
    {
        $request->validate([
            'pdf_path' => 'required|string',
            'signature' => 'required|string', // base64 image
            'x' => 'required|numeric',
            'y' => 'required|numeric',
            'nomor_surat' => 'required|string',
            'folder' => 'required|string',
        ]);

        $pdfPath = storage_path("app/" . $request->pdf_path);
        $signatureImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $request->signature));

        $pdf = new Fpdi();
        $pdf->AddPage();
        $pdf->setSourceFile($pdfPath);
        $tplIdx = $pdf->importPage(1);
        $pdf->useTemplate($tplIdx);

        // Simpan tanda tangan sementara
        $signaturePath = storage_path("app/signature.png");
        file_put_contents($signaturePath, $signatureImage);
        $pdf->Image($signaturePath, $request->x, $request->y, 40); // ukuran 40

        // Barcode dari nomor surat
        $generator = new BarcodeGeneratorPNG();
        $barcode = $generator->getBarcode($request->nomor_surat, $generator::TYPE_CODE_128);
        $barcodePath = storage_path("app/barcode.png");
        file_put_contents($barcodePath, $barcode);
        $pdf->Image($barcodePath, 150, 250, 40);

        // Simpan ke public_html/folder tujuan
        $outputFolder = public_path($request->folder);
        if (!file_exists($outputFolder)) mkdir($outputFolder, 0777, true);

        $outputPath = $outputFolder . '/' . uniqid('pdf_') . '.pdf';
        $pdf->Output($outputPath, 'F');

        return response()->json([
            'message' => 'PDF berhasil disimpan.',
            'path' => str_replace(public_path(), '', $outputPath)
        ]);
    }
}
