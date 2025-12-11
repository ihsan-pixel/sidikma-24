<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileLembagaController extends Controller
{
    public function view()
    {
        $data['title'] = "Profil Lembaga";
        return view('backend.profile_lembaga.view', $data);
    }
}
