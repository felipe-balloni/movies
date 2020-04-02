@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">

        <div class="popular-movies pb-4">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                {{ __('Popular Movies') }}
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popular as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"></x-movie-card>
                @endforeach
            </div>
        </div>

        <div class="now-playing-movies py-4 border-t">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                {{ __('Now Playing Movies') }}
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($nowplaying as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"></x-movie-card>
                @endforeach
            </div>
        </div>

    </div>
@endsection
