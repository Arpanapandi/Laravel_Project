<!DOCTYPE html>
<html>
<head>
    <title>Data Matakuliah</title>
</head>
<body>
    <h1>Tambah Matakuliah</h1>
    <form method="POST" action="/matakuliah">
        @csrf
        <input type="text" name="nama" placeholder="Nama Matakuliah"><br>
        <textarea name="teks" placeholder="Deskripsi"></textarea><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>List Matakuliah</h2>
    <ul>
        @foreach($data as $mk)
            <li>{{ $mk->nama }} - {{ $mk->deskripsi }}</li>
        @endforeach
    </ul>
</body>
</html>
