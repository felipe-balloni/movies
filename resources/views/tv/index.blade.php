@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-tv pb-4">
            <h2 class="home-title">{{ __('Popular Shows') }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow"></x-tv-card>
                @endforeach
            </div>
        </div> <!-- end popular-tv -->

        <div class="top-rated-shows py-4 border-t">
            <h2 class="home-title">{{ __('Top Rated Shows') }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRatedTv as $tvshow)
                    <x-tv-card :tvshow="$tvshow"></x-tv-card>
                @endforeach
            </div>
        </div> <!-- end top-rated-shows -->
    </div>
@endsection
