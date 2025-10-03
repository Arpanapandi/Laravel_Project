<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuanganController extends Controller
{
    // List Ruangan
    public function index()
    {
        $data = Ruangan::all();
        return view('ruangan.index', compact('data'));
    }

    // Store Ruangan
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'kapasitas' => 'required|integer|min:1',
        ]);

        Ruangan::create([
            'nama' => $request->nama,
            'kapasitas' => $request->kapasitas,
        ]);

        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil ditambahkan!');
    }

    // Edit Ruangan
    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        return view('ruangan.edit', compact('ruangan'));
    }

    // Update Ruangan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'kapasitas' => 'required|integer|min:1',
        ]);

        $ruangan = Ruangan::findOrFail($id);
        $ruangan->update($request->only('nama', 'kapasitas'));

        return redirect()->route('ruangan.index')->with('success', 'Data berhasil diupdate!');
    }

    // Delete Ruangan
    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();

        return redirect()->route('ruangan.index')->with('success', 'Data berhasil dihapus!');
    }
}
