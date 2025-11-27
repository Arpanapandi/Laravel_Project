<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LP3I Kampus Waledu | Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800">

    <!-- NAVBAR -->
    <header class="w-full py-4 bg-white shadow xs:fixed top-0 left-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4">

            <div class="flex items-center gap-6">
                <a href="#" class="text-2xl font-bold text-blue-700 font-medium">
                    LP3I
                </a>

                <nav class="hidden md:flex gap-6 text-gray-700 font-medium">
                    <a href="#beranda" class="hover:text-blue-600">Beranda</a>
                    <a href="#program" class="hover:text-blue-600">Program</a>
                    <a href="#tentang" class="hover:text-blue-600">Tentang</a>
                    <a href="#kontak" class="hover:text-blue-600">Kontak</a>
                </nav>
            </div>

            <div class="flex gap-3">
                <a href="#login" class="px-4 py-2 text-blue-600 font-semibold">Login</a>
                <a href="#daftar" class="bg-blue-600 px-4 py-2 text-white rounded-lg font-medium hover:bg-blue-700">Daftar</a>
            </div>

        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="beranda" class="pt-32 pb-20 bg-gray-50">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 px-4 items-center">

            <div>
                <h1 class="text-4xl font-extrabold leading-tight text-gray-900 mb-4">
                    LP3I Waledu Website | Untuk Masa Depan Karier Anda
                </h1>

                <p class="text-lg text-gray-600 mb-6">
                    LP3I hadir dengan fokus pendidikan vokasi yang relevan dengan dunia kerja,
                    dapat membantu mempercepat peluang karier lebih cepat bersama kami.
                </p>

                <div class="flex gap-4">
                    <a href="#daftar" class="bg-blue-600 px-6 py-3 text-white rounded-lg font-semibold text-lg hover:bg-blue-700">Daftar</a>
                    <a href="#program" class="px-6 py-3 border border-blue-600 text-blue-600 rounded-lg font-semibold text-lg hover:bg-blue-50">Lihat Program</a>
                </div>
            </div>

            <div class="flex justify-center">
            <img src="{{ asset('storage/image/landing/hero-lp3i.jpg') }}" alt="Mahasiswa LP3I" class="w-full max-w-2xl object-cover object-cover rounded-xl shadow-lg" />
            </div>

        </div>
    </section>

    <!-- PROGRAM PENDIDIKAN -->
    <section id="program" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-10">Program Pendidikan</h2>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3">Administrasi Bisnis</h3>
                    <p class="text-gray-600">Mempelajari dasar-dasar bisnis, administrasi perkantoran, dan dunia manajemen modern.</p>
                </div>

                <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3">Sistem Informasi</h3>
                    <p class="text-gray-600">Belajar teknologi informasi, software development, jaringan, dan data.</p>
                </div>

                <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3">Pemasaran Digital</h3>
                    <p class="text-gray-600">Strategi pemasaran menggunakan media digital sesuai kebutuhan industri.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- TENTANG LP3I -->
    <section id="tentang" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h3 class="text-3xl font-bold leading-tight text-gray-900 mb-4">Tentang LP3I</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    LP3I adalah lembaga pendidikan vokasi yang telah berdiri lebih dari 38 tahun,
                    berfokus pada pendidikan yang langsung terhubung dengan dunia kerja.
                </p>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Dengan kurikulum berbasis industri, dosen praktisi, dan jaringan perusahaan luas,
                    LP3I selalu membantu ribuan lulusan setiap tahun siap bekerja sejak semester awal.
                </p>
            </div>

            <div>
                <img src="{{ asset('storage/image/landing/mahasiswa-lp3i.png') }}" class="rounded-xl shadow-lg" />
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer id="kontak" class="bg-blue-600 text-white py-10">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-3 gap-10">

            <div>
                <p class="text-xl font-semibold mb-3">LP3I</p>
                <p class="text-gray-100">Lembaga pendidikan vokasi yang mempersiapkan mahasiswa siap kerja lebih cepat.</p>
            </div>

            <div>
                <p class="text-xl font-semibold mb-3">Navigasi</p>
                <ul class="space-y-2 text-gray-100">
                    <li><a href="#beranda" class="hover:underline">Beranda</a></li>
                    <li><a href="#program" class="hover:underline">Program</a></li>
                    <li><a href="#tentang" class="hover:underline">Tentang</a></li>
                    <li><a href="#kontak" class="hover:underline">Kontak</a></li>
                </ul>
            </div>

            <div>
                <p class="text-xl font-semibold mb-3">Hubungi Kami</p>
                <p class="text-gray-100">Email: info@lp3i.ac.id</p>
                <p class="text-gray-100">Telepon: +62 812-3456-7890</p>
            </div>

        </div>

        <div class="text-center text-gray-200 mt-10 text-sm">
            © 2025 LP3I. Semua Hak Dilindungi.
        </div>
    </footer>

</body>
</html>
