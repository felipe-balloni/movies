@extends('layouts.main')

@section('content')
    <!-- start movie-info -->
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            @if ( $movie['poster_path'] )
                <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}"
                     alt="{{ $movie['original_title'] }}"
                     class="rounded-lg shadow-md transition duration-500 ease-in-out transform hover:scale-105 w-64 lg:w-96">
            @else
                <img src="https://via.placeholder.com/500x750.png?text={{ __('No image') }}" alt="no image"
                     class="rounded-lg shadow-md transition duration-500 ease-in-out transform hover:scale-105 w-64 lg:w-96">
            @endif
            <div class="md:ml-24">
                <h2 class=" text-4xl font-semibold">
                    {{ $movie['title'] }}
                </h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    </span>
                    <span class="ml-1">{{ $movie['vote_average'] *10 .'%'}}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @forelse($movie['genres'] as $genre)
                            {{ $genre['name'] }}@if(!$loop->last),@endif
                        @empty
                            {{ __('No genre') }}
                        @endforelse
                    </span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $movie['overview'] }}
                </p>
                <div class="text-sm text-gray-400 mt-4">{{ $movie['tagline'] }}</div>
                <div class="mt4">
                    <a href="{{ $movie['homepage'] }}" target="blank"
                       class="hover:text-gray-300">{{ __('Go to website') }}</a>
                </div>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">{{ __('Feature Crew') }}</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bomg
                                Joon - ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han
                                Hin - won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>

                <div x-data="{ isOpen: false }">
                    @if (count($movie['videos']['results']) > 0)

                        <div class="mt-12">
                            <button
                                @click="isOpen = true"
                                class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150 transform hover:scale-105 shadow-md">
                                <svg class="w-6 fill-current" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                    <path
                                        d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                </svg>
                                <span class="ml-2">{{ __('Play Trailer') }}</span>
                            </button>
                        </div>

                        <template x-if="isOpen">
                            <div
                                style="background-color: rgba(0, 0, 0, .5);"
                                class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto z-50"
                            >
                                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                    <div class="bg-gray-900 rounded">
                                        <div class="flex justify-end pr-4 pt-2">
                                            <button
                                                @click="isOpen = false"
                                                @keydown.escape.window="isOpen = false"
                                                class="text-3xl leading-none hover:text-gray-300">&times;
                                            </button>
                                        </div>
                                        <div class="modal-body px-8 py-8">
                                            <div class="responsive-container overflow-hidden relative"
                                                 style="padding-top: 56.25%">
                                                <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                        src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}"
                                                        style="border:0;" allow="autoplay; encrypted-media"
                                                        allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>

                    @endif
                </div>
            </div>
        </div>
    </div> <!-- end movie-info -->

    <!-- start movie-cast -->
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class=" text-4xl font-semibold">{{ __('Cast') }}</h2>
            @if ($movie['credits']['cast'])
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-10 gap-8">
                    @foreach ($movie['credits']['cast'] as $cast)
                        @if ($loop->index < 10)
                            <div class="mt-8">
                                @if ( $cast['profile_path'] )
                                    <a href="#">
                                        <img src="https://image.tmdb.org/t/p/w300{{ $cast['profile_path'] }}"
                                             alt="{{ $cast['name'] }}"
                                             class="rounded-lg hover:opacity-75 duration-300 shadow-md transition ease-in-out transform hover:scale-105 w-24 lg:w-32">
                                    </a>
                                @else
                                    <img src="https://via.placeholder.com/300x450.png?text={{ __('No image') }}"
                                         alt="no image"
                                         class="rounded-lg hover:opacity-75 duration-300 shadow-md transition ease-in-out transform hover:scale-105 w-24 lg:w-32">
                                @endif
                                <div class="mt-2">
                                    <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>
                                    <div class="text-sm text-gray-400">{{ $cast['character'] }}</div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @else
                {{ __('No casts found.') }}
            @endif
        </div>
    </div> <!-- end movie-cast -->

    <!-- start movie-images -->
    <div class="movie-images" x-data="{ isOpen: false, image: ''}">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            @if ($movie['images']['backdrops'])
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                        <div class="mt-8">
                            <a
                                @click.prevent="
                                    isOpen = true
                                    image='{{ 'https://image.tmdb.org/t/p/original/'.$image['file_path'] }}'
                                "
                                href="#"
                            >
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            @else
                {{ __('No backdrops found.') }}
            @endif

            <div
                style="background-color: rgba(0, 0, 0, .5);"
                class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                x-show="isOpen"
            >
                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                    <div class="bg-gray-900 rounded">
                        <div class="flex justify-end pr-4 pt-2">
                            <button
                                @click="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="text-3xl leading-none hover:text-gray-300">&times;
                            </button>
                        </div>
                        <div class="modal-body px-8 py-8">
                            <img :src="image" alt="poster">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end movie-images -->
@endsection
