<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    public function store(Request $request)
    {
        Dosen::create($request->only('nama', 'nid'));
        return redirect()->back();
    }

    // edit
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }


    //Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nid' => 'required'
        ]);

        $mhs = Dosen::findOrFail($id);
        $mhs->update($request->only('nama','nid'));

        return redirect()->route('dosen.index')->with('succes','Data berhasil di update!');
    }

    //Delete
    public function destroy($id)
    {
        $mhs = Dosen::findOrFail($id);
        $mhs->delete();

        return redirect()->route('dosen.index')->with('succes','Data berhasil dihapus!');
    }
}


