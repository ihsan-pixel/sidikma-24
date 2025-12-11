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


class SkJanuariController extends Controller
{
    public function view()
    {
        $data['title'] = "SK Yayasan";
        $data['users'] = DB::select("select * from users");
        $data['sk_januari'] = DB::table('users')->select('users.*', 'kelas.nama_kelas', 'jurusan.nama_jurusan')->leftJoin('kelas', 'kelas.id', '=', 'users.kelas_id')->leftJoin('jurusan', 'jurusan.id', '=', 'users.jurusan_id')->where('users.id', request()->user()->id)->first();
        $data['kelas'] = DB::select("select * from kelas");
        return view('backend.sk_januari.view', $data);
    }
}