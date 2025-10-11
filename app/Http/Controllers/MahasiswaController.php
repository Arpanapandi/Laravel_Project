<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // $data = Mahasiswa::all();
        // return view('mahasiswa.index', compact('data'));

        $data = Mahasiswa::with('kelas')->get();
        $kelas = Kelas::all();
        return view('mahasiswa.index', compact('data','kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim'  => 'required|string|max:50|unique:mahasiswa,nim',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'nim'  => $request->nim,
            'kelas_id' => $request->kelas_id,
        ]);


        return redirect('/mahasiswa')->with('success', 'Data berhasil disimpan!');
    }

    // edit
    public function edit($id)
{
    $mhs = Mahasiswa::findOrFail($id);
    $kelas = Kelas::all(); // ambil semua data kelas
    return view('mahasiswa.edit', compact('mhs', 'kelas'));
}


    //Update
    // App\Http\Controllers\MahasiswaController.php

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        // validasi nim unik kecuali record saat ini
        'nim' => "required|string|max:50|unique:mahasiswa,nim,{$id}",
        // kelas_id boleh nullable tapi harus mengacu ke tabel kelas jika diisi
        'kelas_id' => 'nullable|exists:kelas,id',
    ]);

    $mhs = Mahasiswa::findOrFail($id);

    // dua cara: mass assignment atau assign manual. Mass assignment oke karena 'kelas_id' ada di $fillable
    $mhs->update($request->only('nama', 'nim', 'kelas_id'));

    // konsisten gunakan 'success' (bukan 'succes')
    return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate!');
}


    //Delete
    public function destroy($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->delete();

        return redirect()->route('mahasiswa.index')->with('succes','Data berhasil dihapus!');
    }
}
