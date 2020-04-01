@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" alt="{{ $movie['original_title'] }}"
            class="rounded-lg shadow-2xl transition duration-500 ease-in-out transform hover:scale-105 w-64 lg:w-96">
        <div class="md:ml-24">

            <h2 class=" text-4xl font-semibold">
                {{ $movie['title'] }}
            </h2>

            <div class="flex flex-wrap items-center text-gray-400 text-sm">
                <span>
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </span>
                <span class="ml-1">{{ $movie['vote_average'] *10 .'%'}}</span>
                <span class="mx-2">|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                <span class="mx-2">|</span>
                <span>
                    @foreach ($movie['genres'] as $genre)
                    {{ $genre['name'] }}
                    @if(!$loop->last),@endif
                    @endforeach
                </span>
            </div>

            <p class="text-gray-300 mt-8">
                {{ $movie['overview'] }}
            </p>

            <div class="text-sm text-gray-400 mt-4">{{ $movie['tagline'] }}</div>
            <div class="mt4">
            <a href="{{ $movie['homepage'] }}" target="blank" class="hover:text-gray-300">{{ __('Go to website') }}</a>
            </div>

            <div class="mt-12">
                <h4 class="text-white font-semibold">{{ __('Feature Crew') }}</h4>
                <div class="flex mt-4">
                    <div>
                        <div>Bomg Joon-ho</div>
                        <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                    </div>
                    <div class="ml-8">
                        <div>Han Hin-won</div>
                        <div class="text-sm text-gray-400">Screenplay</div>
                    </div>
                </div>
            </div>

            @if (count($movie['videos']['results']) > 0)
                <div class="mt-12">
                    <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                        class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150 transform hover:scale-105">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                            </svg>
                        <span class="ml-2">{{ __('Play Trailer') }}</span>
                    </a>
                </div>
            @endif

        </div>
    </div>
</div>

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class=" text-4xl font-semibold">{{ __('Cast') }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-10 gap-8">

            @foreach ($movie['credits']['cast'] as $cast)
                @if ($loop->index < 10)
                    <div class="mt-8">
                        <a href="#">
                            <img src="https://image.tmdb.org/t/p/w300{{ $cast['profile_path'] }}" alt="{{ $cast['name'] }}"
                            class="rounded-lg hover:opacity-75 duration-300 shadow-2xl transition ease-in-out transform hover:scale-105 w-24 lg:w-32">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>
                            <div class="text-sm text-gray-400">{{ $cast['character'] }}</div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</div>

<div class="movie-images border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class=" text-4xl font-semibold">{{ __('Backdrops') }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($movie['images']['backdrops'] as $image)
                @if ($loop->index < 9)
                    <div class="mt-8">
                        <a href="#">
                            <img src="https://image.tmdb.org/t/p/w500{{ $image['file_path'] }}" alt="{{ $image['file_path'] }}"
                                class="rounded-lg shadow-2xl hover:opacity-75 transition ease-in-out duration-300 shadow-2xl transform hover:scale-105">
                        </a>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</div>
@endsection
