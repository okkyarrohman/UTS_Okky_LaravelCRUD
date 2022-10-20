<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function UploadForm()
    {
        return view ('/home/upload');
    }

    public function uploadFile(Request $request)
    {
        $request->file->store('public');
        return "Berhasil Menambahkan";
    }
    
}
