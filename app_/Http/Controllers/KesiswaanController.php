<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class KesiswaanController extends Controller
{
    public function view()
    {
        $data['title'] = "Data Jumlah Siswa";
        $data['kesiswaan'] = DB::select("select * from kesiswaan");
        $data['thajaran'] = DB::select("select * from tahun_ajaran where active = 'ON'");
        $data['kelas'] = DB::select("select * from kelas");
        
        $data['jumlahsiswa'] = DB::table('users')->where('role', 3)->where('kelas_id', request()->user()->kelas_id)->get();
        return view('backend.kesiswaan.view', $data);
    }
    
    public function add()
    {
        $data['title'] = "Input Data Jumlah Siswa";
        $data['kesiswaan'] = DB::select("select * from kesiswaan");
        $data['kelas'] = DB::select("select * from kelas");
        return view('backend.kesiswaan.add', $data);
    }
    public function addkesiswaan(Request $request)
    {
        $data = [
            'kelas_id' => $request->kelas_id,
            'thn_pelajaran' => $request->thn_pelajaran,
            'kelas1' => $request->kelas1,
            'kelas2' => $request->kelas2,
            'kelas3' => $request->kelas3,
            'kelas4' => $request->kelas4,
            'kelas5' => $request->kelas5,
            'kelas6' => $request->kelas6,
            'kelas7' => $request->kelas7,
            'kelas8' => $request->kelas8,
            'kelas9' => $request->kelas9,
            'jumlah_siswa' => $request->jumlah_siswa
            
        ];
        // dd($data);
        DB::table('kesiswaan')->insert($data);
        return redirect('kesiswaan');
    }
    public function edit(Request $request)
    {
        $data['title'] = "Edit Jumlah Siswa";
        $data['kesiswaan'] = DB::table('kesiswaan')->where('id', $request->id)->first();
        $data['kelas'] = DB::select("select * from kelas");
        
        $data['jumlahsiswa'] = DB::table('users')->where('role', 3)->where('kelas_id', request()->user()->kelas_id)->get();
        return view('backend.kesiswaan.edit', $data);
    }
    public function editProses(Request $request)
    {
        $data = [
            'kelas_id' => $request->kelas_id,
            'thn_pelajaran' => $request->thn_pelajaran,
            'kelas1' => $request->kelas1,
            'kelas2' => $request->kelas2,
            'kelas3' => $request->kelas3,
            'kelas4' => $request->kelas4,
            'kelas5' => $request->kelas5,
            'kelas6' => $request->kelas6,
            'kelas7' => $request->kelas7,
            'kelas8' => $request->kelas8,
            'kelas9' => $request->kelas9,
            'jumlah_siswa' => $request->jumlah_siswa
        ];

        // dd($request->id);
        DB::table('kesiswaan')->where('id', $request->id)->update($data);
        return redirect('kesiswaan');
    }
    public function delete($id)
    {
        try {
            // dd($id);
            DB::table('kesiswaan')->where('id', $id)->delete();
            // Alert::success('Category was successful deleted!');
            return redirect()->route('kesiswaan');
        } catch (Exception $e) {
            return response([
                'success' => false,
                'msg'     => 'Error : ' . $e->getMessage() . ' Line : ' . $e->getLine() . ' File : ' . $e->getFile()
            ]);
        }
    }
    public function movekelas()
    {
        $data['title'] = "Kenaikan Kelas";
        
        $data['kelas'] = DB::select("select * from kelas");
        $data['jurusan'] = DB::select("select * from jurusan");
        return view('backend.kelas.movekelas', $data);
    }
    public function load_data_moveKelasFrom(Request $request)
    {
        $data = DB::select("
        select u.id, u.nama_lengkap, k.nama_kelas, j.nama_jurusan from users u left join kelas k on k.id=u.kelas_id left join jurusan j on j.id=u.jurusan_id 
        where u.kelas_id = '$request->kelas_id_from' and u.jurusan_id = '$request->jurusan_id_from' and u.status != 'Lulus'");
        echo json_encode($data);
    }
    public function load_data_moveKelasTo(Request $request)
    {
        $data = DB::select("select u.id, u.nama_lengkap, k.nama_kelas, j.nama_jurusan 
        from users u left join kelas k on k.id=u.kelas_id left join jurusan j on j.id=u.jurusan_id 
        where u.kelas_id = '$request->kelas_id_to' and u.jurusan_id = '$request->jurusan_id_to' and u.status != 'Lulus'");
        echo json_encode($data);
    }
    function moveproses(Request $request)
    {
        foreach (explode(',', $request->user_id) as $uid) {
            $data = [
                'kelas_id' => $request->kelas_id_to,
                'jurusan_id' => $request->jurusan_id_to,
            ];
            DB::table('users')->where('id', $uid)->update($data);
           
        }
        echo json_encode($data);
    }
    function backproses(Request $request)
    {
        foreach (explode(',', $request->user_id) as $uid) {
            $data = [
                'kelas_id' => $request->kelas_id_from,
                'jurusan_id' => $request->jurusan_id_from,
            ];
            DB::table('users')->where('id', $uid)->update($data);
        }
        echo json_encode($data);
    }
    public function lulus()
    {
        $data['title'] = "Kelulusan";

        $data['kelas'] = DB::select("select * from kelas ORDER BY nama_kelas DESC LIMIT 1");
        $data['jurusan'] = DB::select("select * from jurusan");
        return view('backend.kelas.lulus', $data);
    }
    public function load_data_lulus(Request $request)
    {
        $data = DB::select("select u.id, u.nama_lengkap, k.nama_kelas, j.nama_jurusan 
        from users u left join kelas k on k.id=u.kelas_id left join jurusan j on j.id=u.jurusan_id 
        where u.kelas_id = '$request->kelas_id_from' and u.jurusan_id = '$request->jurusan_id_from' and u.status != 'Lulus'");
        echo json_encode($data);
    }
    function lulusproses(Request $request)
    {
        foreach (explode(',', $request->user_id) as $uid) {
            $data = [
                'status' => "Lulus",
            ];
            DB::table('users')->where('id', $uid)->update($data);
        }
        echo json_encode($data);
    }
}
