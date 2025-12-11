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


class SkController extends Controller
{
    public function view()
    {
        $data['title'] = "SK Yayasan";
        $data['sk'] = DB::select("select * from sk");
        return view('backend.sk.view', $data);
    }
    
    public function add()
    {
        $data['title'] = "Upload SK Yayasan";
        $data['sk'] = DB::select("select * from sk");
        $data['tahun_ajaran'] = DB::select("select * from tahun_ajaran");
        $data['kelas'] = DB::select("select * from kelas");
        $data['bulan_sk'] = DB::select("select * from bulan_sk");
        return view('backend.sk.add', $data);
    }
    public function addsk(Request $request)
    {
        $file_path = public_path() . '/storage/dokumen/' . $request->sk;
        File::delete($file_path);
        $sk = $request->file('sk');
        $filename = $sk->getClientOriginalName();
        $sk->move(public_path('storage/dokumen'), $filename);
        $data = [
            'id' => $request->id,
            'sekolah' => $request->sekolah,
            'tahun_sk' => $request->tahun_sk,
            'bulan_sk' => $request->bulan_sk,
            'sk' => $request->sk
        ];
        // dd($data);
        DB::table('sk')->insert($data);
        Alert::success('SK berhasil ditambah');
        return redirect('sk');
    }
    public function edit(Request $request)
    {
        $data['title'] = "Edit SK Yayasan";
        $data['sk'] = DB::select("select * from sk");
        $data['tahun_ajaran'] = DB::select("select * from tahun_ajaran");
        $data['kelas'] = DB::select("select * from kelas");
        $data['bulan_sk'] = DB::select("select * from bulan_sk");
        return view('backend.sk.add', $data);
    }
    public function editProses(Request $request)
    {
        $data = [
            'id' => $request->id,
            'sekolah' => $request->sekolah,
            'tahun_sk' => $request->tahun_sk,
            'bulan_sk' => $request->bulan_sk,
            'sk' => $request->sk
        ];
        // dd($request->id);
        DB::table('sk')->where('id', $request->id)->update($data);
        return redirect('sk');
    }
    public function delete($id)
    {
        try {
            // dd($id);
            DB::table('sk')->where('id', $id)->delete();
            // Alert::success('Category was successful deleted!');
            return redirect()->route('sk');
        } catch (Exception $e) {
            return response([
                'success' => false,
                'msg'     => 'Error : ' . $e->getMessage() . ' Line : ' . $e->getLine() . ' File : ' . $e->getFile()
            ]);
        }
    }
    public function download($filename)
    {
        // Cek apakah file ada di storage
        $path = storage_path("public/storage/dokumen/{$filename}");

        // Jika file ada, download file tersebut
        if (file_exists($path)) {
            return response()->download($path);
        }

        // Jika file tidak ada, tampilkan error 404
        abort(404);
    }
}
