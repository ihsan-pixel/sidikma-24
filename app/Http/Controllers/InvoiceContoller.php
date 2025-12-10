<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class InvoiceController extends Controller
{
    public function view()
    {
        $data['title'] = "Invoice Iuran LP. Ma'arif NU PCNU Gunungkidul";
        return view('backend.invoice.view', $data);
    }
}