<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Data Ruangan
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Form Tambah Ruangan --}}
            <div class="bg-white dark:bg-white-600 shadow sm:rounded-lg p-6 mb-6">
                <h3 class="font-semibold text-lg mb-4">Tambah Ruangan</h3>
                <form action="{{ route('ruangan.store') }}" method="POST">
                    @csrf
                    <div class="flex gap-4">
                        <input type="text" name="nama" placeholder="Nama Ruangan" class="border rounded px-3 py-2 w-1/2" required>
                        <input type="number" name="kapasitas" placeholder="Kapasitas" class="border rounded px-3 py-2 w-1/4" required>
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Tambah</button>
                    </div>
                </form>
            </div>

            {{-- List Ruangan --}}
            <div class="bg-white dark:bg-white-600 shadow sm:rounded-lg">
                <div class="p-6">
                    <h3 class="font-semibold text-lg mb-4">List Ruangan</h3>
                    <table class="table-auto w-full border">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-2 text-center w-16">No</th>
                                <th class="px-4 py-2">Nama Ruangan</th>
                                <th class="px-4 py-2">Kapasitas</th>
                                <th class="px-4 py-2 text-center w-40">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $ruang)
                                <tr>
                                    <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $ruang->nama }}</td> <!-- FIXED -->
                                    <td class="border px-4 py-2 text-center">{{ $ruang->kapasitas }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <a href="{{ route('ruangan.edit', $ruang->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                                        <form action="{{ route('ruangan.destroy', $ruang->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus data ini?')">
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
