@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/joker.jpg" alt="joker" class="w-64 md:w-96 h-96 ml-8 md:ml-24 ">
            <div class="ml-8 md:ml-32">
                <h2 class="text-4xl font-semibold">Joker(2019 flim)</h2>
                <div class="flex flex-wrap items-center text-gray-200 text-sm mt-1">
                    <span><i class="fa fa-star text-yellow-500" aria-hidden="true"></i></span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Apr 10,2019</span>
                    <span class="mx-2">|</span>
                    <span> Action , Comedy , Thriller</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non tempora velit dolor architecto nesciunt
                    magnam, consectetur excepturi. Laboriosam quibusdam porro magni earum atque nisi distinctio aperiam
                    excepturi, vero quidem, illo adipisci a dolor! In, eos? Excepturi pariatur adipisci in error architecto
                    temporibus amet officia repellendus, sint aspernatur. Nisi, reiciendis fugit?
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Todd Phillips</div>
                            <div class="text-sm text-gray-400">Director,ScreenPlay</div>
                        </div>
                        <div class="ml-8">
                            <div>Bradley Cooper</div>
                            <div class="text-sm text-gray-400">Director</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button
                        class="flex items-center bg-yellow-400 text-gray-900 rounded font-bold px-3 py-2 hover:bg-yellow-500 transition ease-in-out duration-150 focus:border-none">
                        <i class="fa fa-play-circle-o fa-2x" aria-hidden="true"></i>
                        <span class="ml-2">Play Trailer</span>

                    </button>
                </div>

            </div>
        </div>
    </div>
    {{-- end movie info --}}

    {{-- start Cast section --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>


            <div class="ml-20 sm:ml-0 grid grid-cols-1 xs:pl-32 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/Robert.jpg" alt="Robert"
                            class=" sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2 ml-1">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Robert De Niro
                    </div>
                </div>


                <div class="mt-8">
                    <a href="#">
                        <img src="/img/GlennFleshler.jpg" alt="GlennFleshler"
                            class=" sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2 ml-1">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Glenn Fleshler
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/leightGill.jpg" alt="leightGill"
                            class="sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2 ml-1">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Leight Gill
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/SheaWhigham.jpg" alt="SheaWhigham"
                            class=" sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2 ml-1">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Shea Whigham
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/MarcMaron.jpg" alt="MarcMaron"
                            class="sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2 ml-1">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Marc Maron
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Cast section --}}

    {{-- images --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>


            <div class=" sm:ml-0 grid grid-cols-1 xs:pl-32 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/img1.jpg" alt="img"
                            class=" sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>


                <div class="mt-8">
                    <a href="#">
                        <img src="/img/img2.jpg" alt="img"
                            class=" sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/img3.jpg" alt="img"
                            class=" sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

            </div>
        </div>
    </div>

    {{-- end images --}}
    </div>
    </div>
@endsection
