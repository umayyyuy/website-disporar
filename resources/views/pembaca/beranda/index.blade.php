@extends('layout.pembaca')

@section('title', 'DISPORAPAR Kabupaten Melawi')

@section('content')
<!-- Favicon / Logo di tab browser -->
    <link rel="icon" type="image/png" href="{{ asset('img/logo.dispora.png') }}">
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
                <img src="{{ asset('img/struktur.jpeg ') }}" class="w-full mb-4">
                <h4 class="text-xl font-semibold">Struktur Organisasi</h4>
                <p>Kepala Dinas, Sekretaris, Bidang Olahraga, Bidang Pariwisata, Bidang Kebudayaan, dan staf pendukung.</p>
            </div>
            <div id="sejarah">
                <img src="{{ asset('img/apang.semangai.jpg ') }}" alt="Foto sejarah bangunan tua di Melawi yang melambangkan warisan budaya Dayak dengan atribut tradisional" class="w-full mb-4">
                <h4 class="text-xl font-semibold">Sejarah Singkat</h4>
                <p>Sejarah dinas pariwisata dan kebudayaan (Disparbud) Kabupaten Melawi tidak terlepas dari sejarah pembentukan kabupaten itu sendiri, yaitu pemekaran dari Kabupaten Sintang berdasarkan Undang-Undang Nomor 34 Tahun 2003. Setelah pembentukan, dinas ini dibentuk untuk mengelola potensi pariwisata dan kebudayaan di wilayah tersebut, yang mencakup warisan sejarah seperti perjuangan masyarakat Melawi dalam meraih kemerdekaan. .</p>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Section -->
<section id="layanan" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h3 class="text-3xl font-bold text-center mb-8">Bidang-bidang</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div id="olahraga" class="fade-in">
                <img src="{{ asset('img/1.a.png ') }}"class="w-full mb-4">
                <h4 class="text-xl font-semibold">Kegiatan Pemudaan</h4>
                <p>Pelatihan dan turnamen olahraga untuk meningkatkan kesehatan dan kebugaran warga Melawi.</p>
            </div>
            <div id="olahraga">
                <img src="{{ asset('img/juara.jpg ') }}" class="w-full mb-4">
                <h4 class="text-xl font-semibold">Kegiatan Olahraga</h4>
                <p>Arum jeram dikabupaten melawi</p>
            </div>
            <div id="pariwisata">
                <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dd895efe-c6c5-48ca-aa2b-74213ecdeac7.png" alt="Perayaan festival budaya Dayak dengan tarian tradisional dan kostum adat beraneka ragam warna" class="w-full mb-4">
                <h4 class="text-xl font-semibold">Kegiatan Pariwisata</h4>
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
@endsection