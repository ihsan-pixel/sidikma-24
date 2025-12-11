<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanTahunan;
use Illuminate\Support\Facades\File;

class LaporanTahunanController extends Controller
{
    public function index()
    {
        $laporans = LaporanTahunan::all();
        return view('backend.laporan_tahunan.view', compact('laporans'));
    }

    public function create()
    {
        return view('backend.laporan_tahunan.create');
    }

    public function store(Request $request)
    {
        // Validasi form
        $request->validate([
            'tahun' => 'required|numeric',
            'file_program' => 'required|file|mimes:pdf',
            'file_keuangan' => 'required|file|mimes:pdf',
        ]);
    
        // Tentukan direktori penyimpanan
        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/dokumen/laporan_tahunan/';
    
        // Buat folder jika belum ada
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }
    
        // Ambil file dan nama asli
        $fileProgram = $request->file('file_program');
        $fileKeuangan = $request->file('file_keuangan');
    
        $fileProgramName = uniqid() . '_' . $fileProgram->getClientOriginalName();
        $fileKeuanganName = uniqid() . '_' . $fileKeuangan->getClientOriginalName();
    
        // Pindahkan file ke folder tujuan
        $fileProgram->move($destinationPath, $fileProgramName);
        $fileKeuangan->move($destinationPath, $fileKeuanganName);
    
        // Simpan ke database
        LaporanTahunan::create([
            'tahun' => $request->tahun,
            'file_program' => $fileProgramName,
            'file_keuangan' => $fileKeuanganName,
        ]);
    
        return redirect()->route('laporan_tahunan.index')->with('success', 'Laporan berhasil ditambahkan.');
    }
    public function destroy($id)
    {
        $laporan = LaporanTahunan::findOrFail($id);

        File::delete(public_path('public_html/' . $laporan->file_program));
        File::delete(public_path('public_html/' . $laporan->file_keuangan));

        $laporan->delete();

        return redirect()->route('laporan_tahunan.index')->with('success', 'Laporan berhasil dihapus.');
    }
}
