<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TenagaController extends Controller
{
    public function view()
    {
        $data['title'] = "Tenaga Pendidik & Kependidikan";
        $data['tenaga'] = DB::select("select * from tenaga");
        $data['kelas'] = DB::select("select * from kelas");
        
        $data['tenagapendidik'] = DB::table('users')->where('role', 2)->where('kelas_id', request()->user()->kelas_id)->get();
        $data['kelas'] = DB::select("select * from kelas");
        $data['jurusan'] = DB::select("select * from jurusan");
        return view('backend.tenaga.view', $data);
    }

    public function open()
    {
        $data['title'] = "Tenaga Pendidik & Kependidikan";
        $data['tenaga'] = DB::select("select * from tenaga");
        $data['kelas'] = DB::select("select * from kelas");
        
        $data['tenagapendidik'] = DB::table('users')->where('role', 2)->where('kelas_id', request()->user()->kelas_id)->get();
        $data['kelas'] = DB::select("select * from kelas");
        $data['jurusan'] = DB::select("select * from jurusan");
        return view('backend.tenaga.view', $data);
    }
    
    public function add()
    {
        $data['title'] = "Input Data Pendidik dan Tenaga Kependidikan";
        $data['tenaga'] = DB::select("select * from tenaga");
        $data['kelas'] = DB::select("select * from kelas");
        return view('backend.tenaga.add', $data);
    }
    public function addTenaga(Request $request)
    {
        $data = [
            'id' => $request->id,
            'kelas_id' => $request->kelas_id,
            'thn_pelajaran' => $request->thn_pelajaran,
            'jml_gtysertifikasiinpassing' => $request->jml_gtysertifikasiinpassing,
            'jml_gtysertifikasinoninpassing' => $request->jml_gtysertifikasinoninpassing,
            'jml_gtynonsertifikasi' => $request->jml_gtynonsertifikasi,
            'jml_pty' => $request->jml_pty,
            'jml_pns' => $request->jml_pns,
            'jml_tenaga' => $request->jml_tenaga
        ];
        // dd($data);
        DB::table('tenaga')->insert($data);
        return redirect('tenaga');
    }
    public function edit(Request $request)
    {
        $data['title'] = "Edit Jumlah Tenaga Pendidik";
        $data['tenaga'] = DB::table('tenaga')->where('id', $request->id)->first();
        $data['kelas'] = DB::select("select * from kelas");
        return view('backend.tenaga.edit', $data);
    }
    public function editProses(Request $request)
    {
        $data = [
            'kelas_id' => $request->kelas_id,
            'thn_pelajaran' => $request->thn_pelajaran,
            'jml_gtysertifikasiinpassing' => $request->jml_gtysertifikasiinpassing,
            'jml_gtysertifikasinoninpassing' => $request->jml_gtysertifikasinoninpassing,
            'jml_gtynonsertifikasi' => $request->jml_gtynonsertifikasi,
            'jml_pty' => $request->jml_pty,
            'jml_pns' => $request->jml_pns,
            'jml_tenaga' => $request->jml_tenaga
        ];

        // dd($request->id);
        DB::table('tenaga')->where('id', $request->id)->update($data);
        return redirect('tenaga');
    }
    public function delete($id)
    {
        try {
            // dd($id);
            DB::table('tenaga')->where('id', $id)->delete();
            // Alert::success('Category was successful deleted!');
            return redirect()->route('tenaga');
        } catch (Exception $e) {
            return response([
                'success' => false,
                'msg'     => 'Error : ' . $e->getMessage() . ' Line : ' . $e->getLine() . ' File : ' . $e->getFile()
            ]);
        }
    }

    
}
