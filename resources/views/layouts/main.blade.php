<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-700">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <i class="fa fa-video-camera mx-2" aria-hidden="true"></i>
                    <a href="{{ route('movies.index') }}">MovieApp</a>
                </li>

                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>

            <div class="flex flex-col md:flex-row items-center">

                <livewire:search-dropdown />

                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avater.jpg" class="rounded-full w-8 h-8" alt="avater">
                    </a>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')

    <livewire:scripts>

</body>

</html>
