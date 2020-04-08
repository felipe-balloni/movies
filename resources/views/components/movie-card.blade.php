<div class="mt-8">
    <a href="{{ route('movie.show', $movie['id'] ) }}">
        @if ( $movie['poster_path'] )
            <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" alt="{{ $movie['original_title'] }}"
                 class="hover:opacity-50 transition ease-in-out duration-300 rounded-lg shadow-md">
        @else
            <img src="https://via.placeholder.com/500x750.png?text={{ __('No image') }}" alt="no image" class="hover:opacity-50 transition ease-in-out duration-300 rounded-lg shadow-md">
        @endif
    </a>
    <a href="{{ route('movie.show', $movie['id'] ) }}" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
    <div class="flex items-center text-gray-400 text-sm mt-1">
        <span>
            <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                <path
                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
            </svg>
        </span>
        <span class="ml-1">{{ $movie['vote_average'] * 10 . '%'}}</span>
        <span class="mx-2">|</span>
        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
    </div>
    <div class="text-gray-400 text-sm">
        @foreach ($movie['genre_ids'] as $genre)
        {{ $genres->get($genre) }}@if(!$loop->last),@endif
        @endforeach
    </div>
</div>
