@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            {{ __('Popular Movies') }}
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/sonic.jpg') }}" alt="sonic"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                    </span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="text-gray-400 text-sm">
                    Action, Triller, Comedy
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/parasite.jpg') }}" alt="parasite"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                    </span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="text-gray-400 text-sm">
                    Action, Triller, Comedy
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/joker.jpg') }}" alt="joker"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                    </span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="text-gray-400 text-sm">
                    Action, Triller, Comedy
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('img/frozen2.jpg') }}" alt="frozen2"
                        class="hover:opacity-75 transition ease-in-out duration-300">
                </a>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                    </span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="text-gray-400 text-sm">
                    Action, Triller, Comedy
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
