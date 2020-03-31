@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="{{ asset('img/parasite.jpg') }}" alt="parasite" class="w-64 lg:w-96">
        <div class="md:ml-24">

            <h2 class=" text-4xl font-semibold">
                Parasite (2019)
            </h2>

            <div class="flex flex-wrap items-center text-gray-400 text-sm">
                <span>
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                        <path
                            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                    </svg>
                </span>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Feb 20, 2020</span>
                <span class="mx-2">|</span>
                <span>Action, Triller, Comedy</span>
            </div>

            <p class="text-gray-300 mt-8">
                Lorem ipsum dolor sit amet. Cum commodi nemo qui voluptatum repellat rem illo amet. Vel perspiciatis
                doloremque ut adipisci laudantium ut dolorem saepe et adipisci aspernatur. Est eaque aspernatur ut rerum
                reiciendis qui placeat culpa qui minus vero ex quam expedita.
            </p>

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

            <div class="mt-12">
                <button
                    class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                    <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                    <span class="ml-2">{{ __('Play Trailer') }}</span>
                </button>
            </div>

        </div>
    </div>
</div>

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class=" text-4xl font-semibold">{{ __('Cast') }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/actor1.jpg') }}" alt="actor1"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">John Smith</div>
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/actor2.jpg') }}" alt="actor2"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">John Smith</div>
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/actor3.jpg') }}" alt="actor3"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">John Smith</div>
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/actor4.jpg') }}" alt="actor4"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">John Smith</div>
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/actor5.jpg') }}" alt="actor5"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                    <div class="text-sm text-gray-400">John Smith</div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="movie-images border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class=" text-4xl font-semibold">{{ __('Cast') }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/image1.jpg') }}" alt="image1"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/image2.jpg') }}" alt="image2"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/image3.jpg') }}" alt="image3"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/image4.jpg') }}" alt="image4"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/image5.jpg') }}" alt="image5"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/image6.jpg') }}" alt="image6"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
            </div>


        </div>

    </div>
</div>
@endsection
