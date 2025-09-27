<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim'  => 'required|unique:mahasiswa',
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'nim'  => $request->nim,
        ]);

        return redirect('/mahasiswa')->with('success', 'Data berhasil disimpan!');
    }
}
