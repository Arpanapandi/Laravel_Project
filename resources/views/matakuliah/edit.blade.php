<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Mata Kuliah
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Nama Mata Kuliah -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Nama Mata Kuliah</label>
                        <input type="text" name="nama" 
                               value="{{ old('nama', $matakuliah->nama) }}"
                               class="border rounded w-full px-3 py-2"
                               required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Deskripsi</label>
                        <textarea name="deskripsi" 
                                  class="border rounded w-full px-3 py-2"
                                  rows="4"
                                  required>{{ old('deskripsi', $matakuliah->deskripsi) }}</textarea>
                    </div>

                    <!-- Tombol Update -->
                    <button type="submit"
                            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
