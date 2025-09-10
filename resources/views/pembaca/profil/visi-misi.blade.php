@extends('layout.pembaca')

@section('title', 'Visi dan Misi')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <div class="lg:flex lg:items-center">
            <div class="w-full space-y-12 lg:w-1/2 ">
                <div>


                </div>

                <div class="md:flex md:items-start md:-mx-4">
                    <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </span>

                    <div class="mt-4 md:mx-4 md:mt-0">
                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Visi</h1>

                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                            "Terwujudnya Kabupaten Melawi yang adil, pantas, hebat dan berlandaskan gotong royong.".
                        </p>
                    </div>
                </div>

                <div class="md:flex md:items-start md:-mx-4">
                    <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </span>

                    <div class="mt-4 md:mx-4 md:mt-0">
                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Misi</h1>

                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                           "Meningkatkan kualitas sumber daya manusia (SDM) di bidang kepemudaan dan keolahragaan, serta mengembangkan karakter dan jiwa kewirausahaan pemuda."
                        </p>
                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                           "Membina dan mengembangkan olahraga prestasi, rekreasi, dan tradisional untuk menciptakan pemuda berkarakter dan berdaya saing." 
                        </p>
                         <p class="mt-3 text-gray-500 dark:text-gray-300">
                           "Mengembangkan potensi kepariwisataan daerah berbasis potensi lokal."
                        </p>
                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                           "Melaksanakan program pengembangan sarana dan prasarana kepemudaan, olahraga, dan pariwisata."
                        </p>
                        <p class="mt-3 text-gray-500 dark:text-gray-300">
                          "Melakukan promosi dan pemasaran pariwisata daerah yang efektif dan efisien."
                        </p>
                    </div>
                </div>
            </div>

            <div class="hidden lg:flex lg:items-center lg:w-1/2 lg:justify-center">
                <img class="w-[20rem] h-[20rem] object-contain xl:w-[30rem] xl:h-[30rem] rounded-full" src="{{ asset('img/1.a.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
    
    
@endsection