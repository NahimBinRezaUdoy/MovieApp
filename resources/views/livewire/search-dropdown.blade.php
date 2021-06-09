<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
    <input wire:model.debounce.500ms="search" @focus="isOpen = true" type="text"
        class="bg-gray-700 rounded-full w-64 text-sm px-4 py-1 focus:outline-none focus:shadow-outline"
        placeholder="Search">
    <div class="absolute top-0 right-3">
        <i class="fa fa-search fil-current text-gray-300 w-4" aria-hidden="true"></i>
    </div>

    @if (strlen($search) >= 3)
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4 z-20" x-show="isOpen">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a href="{{ route('movies.show', $result['id']) }}"
                                class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                @if ($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}"
                                        alt="Movie_image" class="w-10 h-10 rounded">
                                @else
                                    <img src="https://ellendaleservices.com/wp-content/uploads/2017/02/video-player-placeholder-very-large.png"
                                        alt="movie_image" class="w-10 h-10 rounded">
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span>

                            </a>
                        </li>
                    @endforeach

                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
