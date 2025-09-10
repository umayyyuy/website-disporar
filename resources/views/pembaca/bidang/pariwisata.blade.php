@extends('layout.pembaca')

@section('title', 'Bidang Pariwisata')

@section('content')
 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">

        <!-- Blog post header -->
        <div class="py-8">
            <h1 class="text-3xl font-bold mb-2">Bidang Pariwisata</h1>
        </div>

        <!-- Featured image -->
        <img src="{{ asset('img/bukit.batu.jpg ') }}" alt="Featured image" class="w-full h-auto mb-8">
            <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                <p> Bukit Batu didesa mumbung kecamatan menukung, perjalanan sekitar dari nanga pinoh 3 jam ke bawah kaki bukit batu dan pemandangan dari atas mendapatkan lautan awan dan dekat hutan konservasi, untuk hewan dan alamnya cukup terjaga. </p>
        <img src="{{ asset('img/cahai.11.jpg ') }}" alt="Featured image" class="w-full h-auto mb-8">
            <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                <p> Cahai 11 atau Air terjun 11 adalah air terjun yang rutenya sangat jauh dari desa nyanggau kecamatan ella hilir perjalanan kaki sekitar 3-4 jam dari desa tersebut dan dari nanga pinoh ke desa nyanggau sekitaran 1 jam 30 menit. Sahai 11 ini memiliki pemandangan yang luar biasa dan sungai yang sangat jernih dan ikan masih banyak dan terjaga. </p>   
        <img src="{{ asset('img/teletabis.jpg') }}" alt="Featured image" class="w-full h-auto mb-8">

        <img src="{{ asset('img/sahai.entoba.jpg') }}" alt="Featured image" class="w-full h-auto mb-8">
        </div>
    </div>
</div>

@endsection