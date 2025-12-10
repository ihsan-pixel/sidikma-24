<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SarprasController extends Controller
{
    public function view()
    {
        $data['title'] = "Data Sarana Prasarana";
        $data['sarpras'] = DB::select("select * from sarpras");
        $data['phbnu'] = DB::select("select * from phbnu");
        $data['k_sertifikat'] = DB::select("select * from k_sertifikat");
        
        $data['sarpras1'] = DB::table('users')->where('role', 3)->where('kelas_id', request()->user()->kelas_id)->get();
        return view('backend.sarpras.view', $data);
    }
    
    public function add()
    {
        $data['title'] = "Input Data Sarana & Prasarana";
        $data['phbnu'] = DB::select("select * from phbnu");
        $data['k_sertifikat'] = DB::select("select * from k_sertifikat");
        $data['kelas'] = DB::select("select * from kelas");
        return view('backend.sarpras.add', $data);
    }
    public function addsarpras(Request $request)
    {
        $data = [
            'id' => $request->id,
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
        // dd($data);
        DB::table('sarpras')->insert($data);
        return redirect('sarpras');
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
        Alert::success('Data Sarpras berhasil diedit');
        return redirect('sarpras');
    }
    public function delete($id)
    {
        try {
            // dd($id);
            DB::table('sarpras')->where('id', $id)->delete();
            // Alert::success('Category was successful deleted!');
            return redirect()->route('sarpras');
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
