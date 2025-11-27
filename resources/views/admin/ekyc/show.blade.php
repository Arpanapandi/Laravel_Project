<x-app-layout>

    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow mt-8">

        {{-- ================= Data Pribadi ================= --}}
        <section class="mb-10">
            <h3 class="text-lg font-semibold mb-4">🧍 Data Pribadi</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <p class="text-xs text-gray-500">Nama Lengkap</p>
                    <input type="text" readonly value="{{ $data->user->name }}"
                        class="w-full border border-gray-300 rounded-md p-2 text-sm">
                </div>

                <div>
                    <p class="text-xs text-gray-500">NIK</p>
                    <input type="text" readonly value="{{ $data->nik }}"
                        class="w-full border border-gray-300 rounded-md p-2 text-sm">
                </div>

            </div>
        </section>

        {{-- ================= Data Pendidikan ================= --}}
        <section class="mb-10">
            <h3 class="text-lg font-semibold mb-4">🎓 Data Pendidikan</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <p class="text-xs text-gray-500">Asal Sekolah</p>
                    <input type="text" readonly value="{{ $data->asal_sekolah }}"
                        class="w-full border border-gray-300 rounded-md p-2 text-sm">
                </div>

                <div>
                    <p class="text-xs text-gray-500">Tahun Lulus</p>
                    <input type="text" readonly value="{{ $data->tahun_lulus }}"
                        class="w-full border border-gray-300 rounded-md p-2 text-sm">
                </div>

            </div>
        </section>

        {{-- ================= Dokumen EKYC ================= --}}
        <section class="mb-10">
            <h3 class="text-lg font-semibold mb-4">📎 Dokumen EKYC</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <div class="text-center">
                    <p class="text-xs text-gray-600 mb-2">Foto KTP</p>
                    <img src="{{ asset('storage/' . $data->foto_ktp) }}" 
                         class="w-full rounded border border-gray-300 shadow">
                </div>

                <div class="text-center">
                    <p class="text-xs text-gray-600 mb-2">Foto Selfie</p>
                    <img src="{{ asset('storage/' . $data->foto_selfie) }}" 
                         class="w-full rounded border border-gray-300 shadow">
                </div>

                <div class="text-center">
                    <p class="text-xs text-gray-600 mb-2">Foto KK</p>
                    <img src="{{ asset('storage/' . $data->foto_kk) }}" 
                         class="w-full rounded border border-gray-300 shadow">
                </div>

            </div>
        </section>

        {{-- ================= Alamat Detail ================= --}}
        <section class="mb-10">
            <h3 class="text-lg font-semibold mb-4">📍 Alamat Lengkap</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <p class="text-xs text-gray-500">Provinsi</p>
                    <input type="text" readonly value="{{ $data->provinsi }}"
                        class="w-full border border-gray-300 rounded-md p-2 text-sm">
                </div>

                <div>
                    <p class="text-xs text-gray-500">Kota</p>
                    <input type="text" readonly value="{{ $data->kota }}"
                        class="w-full border border-gray-300 rounded-md p-2 text-sm">
                </div>

            </div>
        </section>

        {{-- ====================== Status Verifikasi ======================= --}}
        <section class="mt-10 border-t pt-6">
            <h3 class="text-lg font-semibold mb-4">🔎 Status Verifikasi</h3>

            <form action="{{ route('admin.ekyc.verify', $data->id) }}" 
                  method="POST" class="flex items-center gap-4">
                @csrf

                <label class="w-48 text-sm font-medium text-gray-700">Ubah Status</label>

                <select name="status" class="flex-1 border border-gray-300 rounded-md p-2 text-sm">
                    <option value="accepted"  {{ $data->status == 'accepted' ? 'selected' : '' }}>✔️ Diterima</option>
                    <option value="submitted" {{ $data->status == 'submitted' ? 'selected' : '' }}>⏳ Menunggu Verifikasi</option>
                    <option value="draft"     {{ $data->status == 'draft' ? 'selected' : '' }}>✍️ Draft</option>
                    <option value="rejected"  {{ $data->status == 'rejected' ? 'selected' : '' }}>❌ Ditolak</option>
                </select>

                <button type="submit" 
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">
                    Simpan
                </button>

                <a href="{{ route('admin.ekyc.index') }}" 
                   class="text-sm text-gray-600 hover:underline ml-auto">
                    ← Kembali
                </a>

            </form>
        </section>

    </div>

</x-app-layout>
