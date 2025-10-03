<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = Matakuliah::all();
        return view('matakuliah.index', compact('data'));
    }

    public function store(Request $request)
    {
        Matakuliah::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/matakuliah');
    }

    // edit
    public function edit($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }


    //Update
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required'
    ]);

    $matakuliah = Matakuliah::findOrFail($id);
    $matakuliah->update([
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
    ]);

    return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diupdate!');
}


    //Delete
    public function destroy($id)
    {
        $mhs = Matakuliah::findOrFail($id);
        $mhs->delete();

        return redirect()->route('matakuliah.index')->with('succes','Data berhasil dihapus!');
    }
}

