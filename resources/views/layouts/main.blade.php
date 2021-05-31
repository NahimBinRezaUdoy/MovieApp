<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">

</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-700">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <i class="fa fa-video-camera mx-2" aria-hidden="true"></i>
                    <a href="#">MovieApp</a>
                </li>

                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>

            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text"
                        class="bg-gray-700 rounded-full w-64 text-sm px-4 py-1 focus:outline-none focus:shadow-outline"
                        placeholder="Search">
                    <div class="absolute top-0 right-3">
                        <i class="fa fa-search fil-current text-gray-300 w-4" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/avater.jpg" class="rounded-full w-8 h-8" alt="avater">
                    </a>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')
</body>

</html>
