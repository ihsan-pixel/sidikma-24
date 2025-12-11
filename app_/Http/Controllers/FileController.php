<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;

class FileController extends Controller
{
    // Menampilkan file (view)
    public function view($filename)
    {
        // Menentukan path file
        $filePath = storage_path('app/public/' . $filename);
        
        // Pastikan file ada sebelum ditampilkan
        if (file_exists($filePath)) {
            return response()->file($filePath);
        }

        return abort(404); // Menampilkan error 404 jika file tidak ditemukan
    }

    // Mengunduh file (download)
    public function download($filename)
    {
        // Menentukan path file
        $filePath = storage_path('app/public/' . $filename);
        
        // Pastikan file ada sebelum diunduh
        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        return abort(404); // Menampilkan error 404 jika file tidak ditemukan
    }
}
