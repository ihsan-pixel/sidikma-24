<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdentitasController extends Controller
{
    public function view()
    {
        $data['title'] = "Identitas Lembaga";
        return view('backend.identitas.view', $data);
    }
}
