@extends('layout.pembaca')

@section('title', 'Bidang Olahraga')

@section('content')
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">

        <!-- Blog post header -->

        <div class="py-8">
            <h1 class="text-3xl font-bold mb-2">Kegiatan Olahraga</h1>
        </div>

        <!-- Featured image -->
        <img src="{{ asset('img/olahraga.jpg') }}" alt="Featured image" class="w-full h-auto mb-8">
        <img src="{{ asset('img/olaharaga2.jpg') }}" alt="Featured image" class="w-full h-auto mb-8">

        <!-- Blog post content -->
        <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
            <p>Kegiatan Olahraga yang dilaksanakan di kabupaten melawi.</p>
        </div>

        <div class="py-8">
            <h1 class="text-3xl font-bold mb-2">Arum Jeram</h1>
        <img src="{{ asset('img/juara.jpg') }}" alt="Featured image" class="w-full h-auto mb-8">
        </div>
    </div>
</div>


@endsection