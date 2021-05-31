@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4 pt-16 ">
        <div class="popular-movies">
            <h2 class="ml-32 sm:ml-0 uppercase tracking-wider text-blue-400 text-lg font-semibold">Popular Movies</h2>

            <div class="ml-20 sm:ml-0 grid grid-cols-1 xs:pl-32 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">

                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div>
        {{-- End Popular Section --}}


        <div class="now-playing-movies py-24">
            <h2 class="ml-32 sm:ml-0 uppercase tracking-wider text-blue-400 text-lg font-semibold">Now Playing</h2>

            <div class="ml-20 sm:ml-0 grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach




            </div>
        </div>
    </div>
@endsection
