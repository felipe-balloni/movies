<div class="mt-8">
    <a href="{{ route('movies.show', $movie['id'] ) }}">
            <img alt="poster" class="movies-image lazyload"
                 src="{{ $movie['poster_path'] }}">
    </a>
    <a href="{{ route('movies.show', $movie['id'] ) }}">{{ $movie['title'] }}</a>
    <div class="flex items-center text-gray-400 text-sm mt-1">
        <span>
            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                <path
                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
            </svg>
        </span>
        <span class="ml-1">{{ $movie['vote_average'] }}</span>
        <span class="mx-2">|</span>
        <span>{{ $movie['release_date'] }}</span>
    </div>
    <div class="text-gray-400 text-sm">
        {{ $movie['genres'] }}
    </div>
</div>
