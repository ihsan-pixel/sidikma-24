<?php

namespace App\Http\Controllers;


use App\Providers\Helper;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class ProfileSekolahController extends Controller
{


    public function view()
    {
        $data['title'] = "Profile Madrasah/Sekolah";
        $data['kelas'] = DB::select("select * from kelas");
        $data['datasekolah'] = DB::select("select u.*, k.nama_kelas, j.nama_jurusan from users u left join kelas k on u.kelas_id=k.id left join jurusan j on u.jurusan_id=j.id where role = '3' and u.status != 'Lulus'");
        return view('backend.profile_sekolah.view', $data);
    }
    public function open($id)
    {
        // Ambil data pengguna berdasarkan ID
        $user = User::findOrFail($id);
        $data['title'] = "Data Guru/Pegawai";
        $data['periode'] = DB::select("select * from periode");
        $data['siswa'] = DB::table('users')->where('id', $id)->first();
        $data['profile'] = DB::table('users')->select('users.*', 'kelas.nama_kelas', 'jurusan.nama_jurusan','ketugasan.ketugasan')->leftJoin('kelas', 'kelas.id', '=', 'users.kelas_id')->leftJoin('jurusan', 'jurusan.id', '=', 'users.jurusan_id')->leftJoin('ketugasan', 'ketugasan.id', '=', 'users.ketugasan')->where('users.id', request()->user()->id)->first();
        $data['tenagapendidik'] = DB::table('users')
        ->where('role', 2)
        ->where('kelas_id', $user->kelas_id) // Menggunakan $user, bukan $id langsung
        ->where('id', '!=', $user->id) // Hindari menampilkan dirinya sendiri
        ->get();
        return view('backend.profile_sekolah.view', $data);
    } 
}