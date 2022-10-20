<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function addSiswa()
    {
        return view ('add-siswa');
    }

    public function createSiswa(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->absen = $request->absen;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        return back ()->with('siswa_created','Berhasil Ditambahkan');
    }

    public function getSiswa()
    {
        $siswas = Siswa::orderBy('id','DESC')->get();
        return view ('siswas', compact('siswas'));
    }

}
