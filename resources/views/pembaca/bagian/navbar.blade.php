 <!-- header laptop -->
 <header class="bg-blue-700 text-white shadow-lg sticky top-0 z-50">
     <div class="container mx-auto px-4 py-3 flex justify-between items-center">
         <div class="flex items-center space-x-4">
             <img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Logo_Kabupaten_Melawi.png" alt="Logo DISPORAPAR Kabupaten Melawi dengan gambar singa melawi dan tulisan resmi dalam warna biru dan putih" class="w-12 h-14 rounded-full">
             <h1 class="text-xl font-bold">DISPORAPAR Kabupaten Melawi</h1>
         </div>
         <nav class="hidden md:flex space-x-6">
             <a href="{{ route('pembaca.beranda') }}" class="hover:text-yellow-300">Beranda</a>
             <div class="relative nav-item">
                 <a href="#profil" class="hover:text-yellow-300 cursor-pointer">Profil</a>
                 <ul class="submenu bg-white text-black border rounded shadow-lg">
                     <li><a href="{{ route('pembaca.visi-misi') }}" class="block px-4 py-2 hover:bg-gray-200">Visi & Misi</a></li>
                     <li><a href="{{ route('pembaca.struktur') }}" class="block px-4 py-2 hover:bg-gray-200">Struktur Organisasi</a></li>
                     <li><a href="{{ route('pembaca.sejarah') }}" class="block px-4 py-2 hover:bg-gray-200">Sejarah Singkat</a></li>
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

 <!-- header mobile -->
 <nav id="mobile-menu" class="md:hidden bg-blue-700 text-white p-4 space-y-2 hidden">
     <a href="#beranda" class="block">Beranda</a>
     <a href="#profil" class="block">Profil</a>
     <a href="#layanan" class="block">Layanan</a>
     <a href="#berita" class="block">Berita</a>
     <a href="#kontak" class="block">Kontak</a>
 </nav>