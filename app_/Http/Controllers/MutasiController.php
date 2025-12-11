<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class MutasiController extends Controller
{
    public function view()
    {
        $data['title'] = "MUTASI GURU & PEGAWAI";
        $data['mutasi'] = DB::select("select * from mutasi");
        $data['ketugasan'] = DB::select("select * from ketugasan");
        $data['jurusan'] = DB::select("select * from jurusan");
        $data['permohonanmutasi'] = DB::table('mutasi')->where('skl_asal', request()->user()->kelas_id)->get();
        return view('backend.mutasi.view', $data);
    }
    
    public function add()
    {
        $data['title'] = "Input Data Mutasi & Pegawai";
        $data['jenis_mutasi'] = DB::select("select * from jenis_mutasi");
        return view('backend.mutasi.add', $data);
    }
    public function addmutasi(Request $request)
    {
        $file_path = public_path() . '/storage/dokumen/mutasi/' . $request->mutasi;
        File::delete($file_path);
        $mutasi = $request->file('mutasi');
        $filename = $mutasi->getClientOriginalName();
        // Simpan ke public_html
        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/dokumen/mutasi/';
        $mutasi->move($destinationPath, $filename);
        //$mutasi->move(public_path('storage/dokumen/mutasi'), $filename);
        $data = [
            'id' => $request->id,
            'ewanu' => $request->ewanu,
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'jenis_mutasi' => $request->jenis_mutasi,
            'skl_asal' => $request->skl_asal,
            'skl_tujuan' => $request->skl_tujuan,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'tmt_pindah' => $request->tmt_pindah,
            'mutasi' => $request->file('mutasi')->getClientOriginalName(),
            'created_at' => now()
        ];
        // dd($data);
        // dd($cekUsers);
        // dd($data);
        DB::table('mutasi')->insert($data);
        Alert::success('Data Mutasi Guru & Pegawai Berhasil Dikirim!');
        return redirect('mutasi');
    }
    public function edit(Request $request)
    {
        $data['title'] = "Edit Sarana & Prasarana";
        $data['sarpras'] = DB::table('sarpras')->where('id', $request->id)->first();
        $data['phbnu'] = DB::select("select * from phbnu");
        $data['k_sertifikat'] = DB::select("select * from k_sertifikat");
        $data['kelas'] = DB::select("select * from kelas");
        return view('backend.sarpras.edit', $data);
    }
    public function editProses(Request $request)
    {
        $data = [
            'kelas_id' => $request->kelas_id,
            'status_akreditasi' => $request->status_akreditasi,
            'masa_akreditasi' => $request->masa_akreditasi,
            'nama_kepala' => $request->nama_kepala,
            'status_tanah' => $request->status_tanah,
            'luas_tanah' => $request->luas_tanah,
            'kepemilikan_sertifikat' => $request->kepemilikan_sertifikat,
            'atas_nama' => $request->atas_nama,
            'phbnu' => $request->phbnu
        ];
        // dd($request->id);
        DB::table('sarpras')->where('id', $request->id)->update($data);
        return redirect('sarpras');
    }
    public function delete($id)
    {
        try {
            // dd($id);
            DB::table('mutasi')->where('id', $id)->delete();
            Alert::success('Data Berhasil Dihapus!');
            return redirect()->route('mutasi');
        } catch (Exception $e) {
            return response([
                'success' => false,
                'msg'     => 'Error : ' . $e->getMessage() . ' Line : ' . $e->getLine() . ' File : ' . $e->getFile()
            ]);
        }
    }
}
