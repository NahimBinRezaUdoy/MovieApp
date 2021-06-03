@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}" alt="joker"
                class="w-64 md:w-96 h-96 ml-8 md:ml-24 ">
            <div class="ml-8 md:ml-32">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-200 text-sm mt-1">
                    <span><i class="fa fa-star text-yellow-500" aria-hidden="true"></i></span>
                    <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{ $genre['name'] }}@if (!$loop->last),@endif
                        @endforeach
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">

                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 3)
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @if (count($movie['videos']['results']) > 0)
                    <div class="mt-12">
                        <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                            class="flex inline-flex items-center bg-yellow-400 text-gray-900 rounded font-bold px-3 py-2 hover:bg-yellow-500 transition ease-in-out duration-150 focus:border-none">
                            <i class="fa fa-play-circle-o fa-2x" aria-hidden="true"></i>
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
    {{-- end movie info --}}

    {{-- start Cast section --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>


            <div class="ml-20 sm:ml-0 grid grid-cols-1 xs:pl-32 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">

                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300/' . $cast['profile_path'] }}" alt="Robert"
                                    class=" sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2 ml-1">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                            </div>
                            <div class="text-gray-400 text-sm">
                                {{ $cast['character'] }}
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    {{-- End Cast section --}}

    {{-- images --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>


            <div class=" sm:ml-0 grid grid-cols-1 xs:pl-32 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                @foreach ($movie['images']['backdrops'] as $images)
                    @if ($loop->index < 6)
                        <div class="mt-8">
                            <a href="{{ 'https://image.tmdb.org/t/p/w400/' . $images['file_path'] }}">
                                <img src="{{ 'https://image.tmdb.org/t/p/w400/' . $images['file_path'] }}" alt="img"
                                    class=" sm:w-auto hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                    @endif
                @endforeach


                {{-- <div class="mt-8">
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
                </div> --}}

            </div>
        </div>
    </div>

    {{-- end images --}}
    </div>
    </div>
@endsection
