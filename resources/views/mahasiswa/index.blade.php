<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Form Tambah Mahasiswa --}}
            <div class="bg-white dark:bg-white-200 shadow sm:rounded-lg p-6 mb-6">
                <h3 class="font-semibold text-lg mb-4">Tambah Mahasiswa</h3>
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="flex gap-4">
                        <input type="text" name="nama" placeholder="Nama"
                            class="border rounded px-3 py-2 w-1/4" required>
                        <input type="text" name="nim" placeholder="NIM"
                            class="border rounded px-3 py-2 w-1/4" required>
                        
                        {{-- Dropdown Kelas --}}
                        <select name="kelas_id" class="border-gray-300 rounded-md w-full" required>
                            <option value="">-- Pilih Kelas --</option>
                            @foreach($kelas as $kls)
                            <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                            @endforeach
                        </select>

                        <button type="submit"
                            class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>

            {{-- List Mahasiswa --}}
            <div class="bg-white dark:bg-white-200 shadow sm:rounded-lg">
                <div class="p-6">
                    <h3 class="font-semibold text-lg mb-4">List Mahasiswa</h3>
                    <table class="table-auto w-full border">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-4 py-2 w-16 text-center">No</th>
                                <th class="px-4 py-2">Nama</th>
                                <th class="px-4 py-2">NIM</th>
                                <th class="px-4 py-2">Kelas</th>
                                <th class="px-4 py-2 w-40 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $mhs)
                                <tr>
                                    <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $mhs->nama }}</td>
                                    <td class="border px-4 py-2">{{ $mhs->nim }}</td>
                                    <td class="border px-4 py-2">{{ $mhs->nama_kelas ?? '-' }}</td>
                                    </td>
                                    <td class="border px-4 py-2 text-center">
                                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                                            class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" 
                                              method="POST" class="inline-block"
                                              onsubmit="return confirm('Hapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
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
