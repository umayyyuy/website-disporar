<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi DISPORAPAR Kabupaten Melawi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4f6fb781-496d-4194-841e-27aa9986b626.png');
            background-size: cover;
            background-position: center;
        }
        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 10;
            min-width: 200px;
            padding: 0.5rem;
            margin: 0;
        }
        .nav-item:hover .submenu {
            display: block;
        }
        .fade-in {
            animation: fadeIn 1s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Header -->
    <header class="bg-blue-700 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Logo_Kabupaten_Melawi.png" alt="Logo DISPORAPAR Kabupaten Melawi dengan gambar singa melawi dan tulisan resmi dalam warna biru dan putih" class="w-12 h-14 rounded-full">
                <h1 class="text-xl font-bold">DISPORAPAR Kabupaten Melawi</h1>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="#beranda" class="hover:text-yellow-300">Beranda</a>
                <div class="relative nav-item">
                    <a href="#profil" class="hover:text-yellow-300 cursor-pointer">Profil</a>
                    <ul class="submenu bg-white text-black border rounded shadow-lg">
                        <li><a href="#visi-misi" class="block px-4 py-2 hover:bg-gray-200">Visi & Misi</a></li>
                        <li><a href="#struktur" class="block px-4 py-2 hover:bg-gray-200">Struktur Organisasi</a></li>
                        <li><a href="#sejarah" class="block px-4 py-2 hover:bg-gray-200">Sejarah Singkat</a></li>
                    </ul>
                </div>
                <div class="relative nav-item">
                    <a href="#layanan" class="hover:text-yellow-300 cursor-pointer">Layanan</a>
                    <ul class="submenu bg-white text-black border rounded shadow-lg">
                        <li><a href="#olahraga" class="block px-4 py-2 hover:bg-gray-200">Kegiatan Olahraga</a></li>
                        <li><a href="#pariwisata" class="block px-4 py-2 hover:bg-gray-200">Wisata Daerah</a></li>
                        <li><a href="#budaya" class="block px-4 py-2 hover:bg-gray-200">Penyelenggaraan Budaya</a></li>
                    </ul>
                </div>
                <a href="#berita" class="hover:text-yellow-300">Berita</a>
                <a href="#kontak" class="hover:text-yellow-300">Kontak</a>
            </nav>
            <button class="md:hidden" onclick="toggleMenu()">Menu</button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="md:hidden bg-blue-700 text-white p-4 space-y-2 hidden">
        <a href="#beranda" class="block">Beranda</a>
        <a href="#profil" class="block">Profil</a>
        <a href="#layanan" class="block">Layanan</a>
        <a href="#berita" class="block">Berita</a>
        <a href="#kontak" class="block">Kontak</a>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="hero-bg text-white py-20">
        <div class="container mx-auto px-4 text-center fade-in">
            <h2 class="text-4xl font-bold mb-4">Selamat Datang di DISPORAPAR Kabupaten Melawi</h2>
            <p class="text-lg mb-8">Mendorong potensi pemuda, olahraga, pariwisata, dan kebudayaan untuk kemajuan daerah.</p>
            <a href="#profil" class="bg-yellow-400 text-blue-700 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-300 transition">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Profil Section -->
    <section id="profil" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-8">Profil DISPORAPAR</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div id="visi-misi" class="fade-in">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e73b058b-9666-415e-9766-910735f8099c.png" alt="Ilustrasi visi misi dengan gambar tangan saling menjabat melambangkan kerjasama dan pertumbuhan pembangunan daerah Melawi" class="w-full mb-4">
                    <h4 class="text-xl font-semibold">Visi & Misi</h4>
                    <p>Visi: Membentuk pemuda tangguh dengan olahraga, wisata, dan budaya yang maju. Misi: Mengelola kegiatan olahraga, promosi pariwisata, dan pelestarian budaya Melawi.</p>
                </div>
                <div id="struktur">
                    <img src="resources/img/struktur.jpeg" alt="Struktur Dispora" class="w-full mb-4">
                    <h4 class="text-xl font-semibold">Struktur Organisasi</h4>
                    <p>Kepala Dinas, Sekretaris, Bidang Olahraga, Bidang Pariwisata, Bidang Kebudayaan, dan staf pendukung.</p>
                </div>
                <div id="sejarah">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/66dc9261-7eff-4028-95fb-e0b53d699cc9.png" alt="Foto sejarah bangunan tua di Melawi yang melambangkan warisan budaya Dayak dengan atribut tradisional" class="w-full mb-4">
                    <h4 class="text-xl font-semibold">Sejarah Singkat</h4>
                    <p>Sejarah dinas pariwisata dan kebudayaan (Disparbud) Kabupaten Melawi tidak terlepas dari sejarah pembentukan kabupaten itu sendiri, yaitu pemekaran dari Kabupaten Sintang berdasarkan Undang-Undang Nomor 34 Tahun 2003. Setelah pembentukan, dinas ini dibentuk untuk mengelola potensi pariwisata dan kebudayaan di wilayah tersebut, yang mencakup warisan sejarah seperti perjuangan masyarakat Melawi dalam meraih kemerdekaan. .</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-8">Layanan Kami</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div id="olahraga" class="fade-in">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/aad297fc-478e-4ce9-9dec-566fd34483c3.png" alt="Grup anak muda berolahraga sepak bola di lapangan hijau Melawi dengan semangat komunitas" class="w-full mb-4">
                    <h4 class="text-xl font-semibold">Kegiatan Olahraga</h4>
                    <p>Pelatihan dan turnamen olahraga untuk meningkatkan kesehatan dan kebugaran warga Melawi.</p>
                </div>
                <div id="pariwisata">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e2956d58-47c0-4592-9533-969044f2a1ce.png" alt="Pemandangan objek wisata air terjun di hutan tropis Kalimantan Barat dengan cahaya matahari" class="w-full mb-4">
                    <h4 class="text-xl font-semibold">Wisata Daerah</h4>
                    <p>Promosi destinasi wisata Melawi seperti air terjun, hutan, dan budaya lokal untuk wisatawan.</p>
                </div>
                <div id="budaya">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dd895efe-c6c5-48ca-aa2b-74213ecdeac7.png" alt="Perayaan festival budaya Dayak dengan tarian tradisional dan kostum adat beraneka ragam warna" class="w-full mb-4">
                    <h4 class="text-xl font-semibold">Penyelenggaraan Budaya</h4>
                    <p>Menyelenggarakan festival, workshop, dan pelestarian seni budaya Melawi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section id="berita" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-8">Berita Terkini</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9a91c6f7-ab7d-4f15-ba48-aa4596c96754.png" alt="Jurnalis melaporkan event turnamen olahraga di stadion Melawi dengan atlet dan penonton antusias" class="w-full mb-4">
                    <h4 class="text-xl font-semibold">Turnamen Basket Pekan ini</h4>
                    <p>Pelaksanaan turnamen basket antar kecamatan Melawi untuk mempromosikan olahraga sehat. Detail: Tanggal 15-20 Januari, lokasi Stadion Utama.</p>
                </div>
                <div>
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e18f139f-0c6b-4e0b-85fb-192f6d11cb88.png" alt="Grup wisatawan menikmati trekking di sungai Melawi dengan pemandangan alam hijau dan bukit" class="w-full mb-4">
                    <h4 class="text-xl font-semibold">Wisata Sungai Melawi Dibuka</h4>
                    <p>Objek wisata sungai baru diluncurkan untuk daya tarik ekowisata. Kunjungi dengan panduan lokal untuk pengalaman terbaik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="py-16 bg-blue-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-8">Hubungi Kami</h3>
            <p class="mb-4">Alamat: Jl. Provinsi.KOTA BARU KM.7 NANGA PINOH, Kabupaten Melawi, Kalimantan Barat</p>
            <p class="mb-4">Telepon: (0567) 123456 | Email: info@disporaparmelawi.go.id</p>
            <p class="mb-8">Ikuti kami di media sosial untuk update terbaru.</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-yellow-400 hover:underline">Facebook</a>
                <a href="#" class="text-yellow-400 hover:underline">Instagram</a>
                <a href="#" class="text-yellow-400 hover:underline">Twitter</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>© 2025 DISPORAPAR Kabupaten Melawi. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        // Simple scroll animation
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('.fade-in');
            sections.forEach(section => {
                const box = section.getBoundingClientRect();
                if (box.top < window.innerHeight - 100) {
                    section.style.opacity = '1';
                } else {
                    section.style.opacity = '0';
                }
            });
        });
    </script>
</body>
</html>
</content>
</create_file>
