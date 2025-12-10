<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrukturController extends Controller
{
    public function view()
    {
        $data['title'] = "Struktur Pengurus";
        return view('backend.struktur.view', $data);
    }
}
