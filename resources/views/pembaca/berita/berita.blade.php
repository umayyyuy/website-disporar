@extends('layout.pembaca')

@section('title', 'Berita')

@section('content')

<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Berita Terkini
            </h1>
            <p class="mb-8 leading-relaxed">Pancak Silat dilakukan dikabupaten melawi</p>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/olahraga.jpg') }}">
        </div>
    </div>
</section>

<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Lomba Arum Jeram
            </h1>
            <p class="mb-8 leading-relaxed">Lomba Arum Jeram dilakukan di desa manggala kecamatan pinoh selatan, dan disini dihadiri siswa/i sma dan dari kabupaten sekadau dan sanggau</p>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/juara.jpg') }}">
        </div>
    </div>
</section>

<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Penyerahan Buku Disporapar Kabupaten Melawi
            </h1>
            <p class="mb-8 leading-relaxed">Momen saat penyerahan buku disporarpar melawi</p>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/buku.jpg') }}">
        </div>
    </div>
</section>

<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Melakukan Kegiatan Workshop
            </h1>
            <p class="mb-8 leading-relaxed">Kegiatan Workshop ini dihadiri para WWF kabupaten Meawi, warga dan kalangan pelajar</p>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/sosialisai.jpg') }}">
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/worshop.jpg') }}">
        </div>
    </div>
</section>

@endsection