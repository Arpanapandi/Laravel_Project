<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Data Mata Kuliah
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Form Tambah Mata Kuliah --}}
            <div class="bg-white dark:bg-white-600 shadow sm:rounded-lg p-6 mb-6">
                <h3 class="font-semibold text-lg mb-4">Tambah Mata Kuliah</h3>
                <form action="{{ route('matakuliah.store') }}" method="POST">
                    @csrf
                    <div class="flex gap-4">
                        <input type="text" name="nama" placeholder="Nama" class="border rounded px-3 py-2 w-1/4" required>
                        <input type="text" name="deskripsi" placeholder="Deskripsi" class="border rounded px-3 py-2 w-1/2" required>
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Tambah</button>
                    </div>
                </form>
            </div>

            {{-- List Mata Kuliah --}}
            <div class="bg-white dark:bg-white-600 shadow sm:rounded-lg">
                <div class="p-6">
                    <h3 class="font-semibold text-lg mb-4">List Mata Kuliah</h3>
                    <table class="table-auto w-full border">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-2 text-center w-16">No</th>
                                <th class="px-4 py-2">Nama</th>
                                <th class="px-4 py-2">Deskripsi</th>
                                <th class="px-4 py-2 text-center w-40">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $mk)
                                <tr>
                                    <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $mk->nama }}</td>
                                    <td class="border px-4 py-2">{{ $mk->deskripsi }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <a href="{{ route('matakuliah.edit', $mk->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
