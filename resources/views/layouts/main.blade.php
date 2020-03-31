<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @livewireStyles

    @yield('custom-styles')
</head>

<body class="font-sans bg-gray-900 text-white">
    <div id="app">
        <nav class="border-b border-gray-800">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-2">
                <ul class="flex flex-col md:flex-row items-center">
                    <li>
                        <a href="http://fbftecnologia.com.br" target="blank">
                            <svg class="w-24" viewBox="90 20 90 80">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: whitesmoke;
                                        }
                                    </style>
                                </defs>
                                <polyline class="cls-1"
                                    points="89.3 43.34 89.3 63.67 95.34 63.67 95.34 48.58 110.31 48.58 110.31 43.34 89.3 43.34" />
                                <polyline class="cls-1"
                                    points="144.69 43.34 144.69 63.67 150.74 63.67 150.74 48.58 165.7 48.58 165.7 43.34 144.69 43.34" />
                                <path class="cls-1"
                                    d="M115.68,63.67V58.45H127.4q7.51,0,7.51-5a4.07,4.07,0,0,0-1.74-3.73,10.75,10.75,0,0,0-5.53-1.1h-12V43.34h11.67c4.09,0,6.13-1.45,6.13-4.33s-2.22-4.43-6.65-4.43H115.68V29.37h13.4a12.26,12.26,0,0,1,7.17,2,7.62,7.62,0,0,1,3.3,6.66q0,5.7-5.93,7.52v.1A8.2,8.2,0,0,1,139,48.29,8,8,0,0,1,141,53.9,8.48,8.48,0,0,1,137,61.61,17.16,17.16,0,0,1,128,63.67Z" />
                                <rect class="cls-1" x="89.3" y="29.37" width="21" height="5.21" />
                                <rect class="cls-1" x="144.69" y="29.37" width="21" height="5.21" />
                                <rect class="cls-1" x="89.3" y="69.71" width="76.39" height="5.21" />
                                <path class="cls-1"
                                    d="M89.81,79.91H91V77.72l1.73-.1v2.29h1.92v1.45H89.82ZM91,85V82.14h1.72v2.73a1.08,1.08,0,0,0,1.06,1.2,1.32,1.32,0,0,0,1-.35L95.15,87a2.56,2.56,0,0,1-1.8.65C91.86,87.64,91,86.87,91,85Z" />
                                <path class="cls-1"
                                    d="M98,80.26l0,3.94a2.22,2.22,0,0,0,2.46,2,4.44,4.44,0,0,0,2.62-.67l.34,1.31a5.51,5.51,0,0,1-3.25.85c-2.44,0-4-1.48-4-3.79A4,4,0,0,1,98,80.26Zm5.53,2.94a4.1,4.1,0,0,1-.15,1l-2.92,0V83l1.41,0a1.76,1.76,0,0,0-1.46-1.8l.09-1.44A3.25,3.25,0,0,1,103.53,83.2Z" />
                                <path class="cls-1"
                                    d="M106.39,80.47l0,3.16a2.48,2.48,0,0,0,2.6,2.52,2.71,2.71,0,0,0,2.09-.7l.41,1.42a4.47,4.47,0,0,1-2.68.77,3.87,3.87,0,0,1-4.14-3.86A4,4,0,0,1,106.39,80.47Zm2.52-.74a4.7,4.7,0,0,1,2.41.59l-.57,1.54a3,3,0,0,0-1.93-.62Z" />
                                <path class="cls-1"
                                    d="M112.87,79.91h1.73l0,1.08a3.15,3.15,0,0,1,2.45-1.26c1.71,0,2.54.92,2.54,3v4.73H117.9V82.82a1.37,1.37,0,0,0-1.37-1.43,2.36,2.36,0,0,0-2,1.25v3.67h-1.72Z" />
                                <path class="cls-1"
                                    d="M121.14,83.78a4,4,0,0,1,3.07-3.89l-.08,1.56a2.32,2.32,0,0,0-1.28,2.14,2.49,2.49,0,0,0,1.36,2.3l-.09,1.64A3.7,3.7,0,0,1,121.14,83.78Zm5.32,2.15a2.23,2.23,0,0,0,1.28-2.15,2.54,2.54,0,0,0-1.36-2.29l.09-1.64a3.83,3.83,0,0,1,3,3.71,3.94,3.94,0,0,1-3.09,3.94Z" />
                                <path class="cls-1" d="M131,76.59l1.73-.1v11H131Z" />
                                <path class="cls-1"
                                    d="M134.25,83.78a4,4,0,0,1,3.07-3.89l-.08,1.56A2.32,2.32,0,0,0,136,83.59a2.49,2.49,0,0,0,1.36,2.3l-.09,1.64A3.7,3.7,0,0,1,134.25,83.78Zm5.32,2.15a2.23,2.23,0,0,0,1.28-2.15,2.54,2.54,0,0,0-1.36-2.29l.09-1.64a3.83,3.83,0,0,1,3,3.71,3.94,3.94,0,0,1-3.09,3.94Z" />
                                <path class="cls-1"
                                    d="M145,84a2,2,0,0,1-.71-1.56,2.81,2.81,0,0,1,2.5-2.63l-.08,1.36a1.14,1.14,0,0,0-.82,1.07,1.33,1.33,0,0,0,.9,1.21l-.08,1.41a2.75,2.75,0,0,1-.92-.31.61.61,0,0,0-.18.42c0,.59.92.88,2.44.82,1.91-.08,2.93.56,3.23,1.6l-2,.07a3.34,3.34,0,0,0-2-.35c-1.85.12-3.26-.64-3.27-1.68A1.68,1.68,0,0,1,145,84Zm-.91,3.7,1.51.46c.05.44.7,1,2.22,1l3.29,0c-.5,1-1.76,1.53-3.42,1.53-2.41,0-3.68-1-3.67-2.48A1.2,1.2,0,0,1,144.05,87.71Zm4.22-4.22a1.06,1.06,0,0,0,.8-1,1.32,1.32,0,0,0-.9-1.25l.09-1.42a2.66,2.66,0,0,1,1.44.62,2.1,2.1,0,0,1,1.6-.67L151.21,81a1.23,1.23,0,0,0-.9.28,1.6,1.6,0,0,1,.33,1,2.66,2.66,0,0,1-2.47,2.61Z" />
                                <path class="cls-1"
                                    d="M152.84,77.55A1.12,1.12,0,0,1,154,76.46a.87.87,0,0,1,.89.89,1.05,1.05,0,0,1-1.07,1.08A.89.89,0,0,1,152.84,77.55ZM153,80l1.72-.11v7.57H153Z" />
                                <path class="cls-1"
                                    d="M156.32,83.73a3.86,3.86,0,0,1,3.84-4,2.45,2.45,0,0,1,2.12,1.09v-.91H164l0,5.24c0,.62.15,1,.55,1a.33.33,0,0,0,.3-.11l.41.85a1.69,1.69,0,0,1-1.52.71,1.43,1.43,0,0,1-1.46-1V82.36a2.18,2.18,0,0,0-2-1.25A2.26,2.26,0,0,0,158,83.56a2.56,2.56,0,0,0,2,2.65l-.09,1.4A3.77,3.77,0,0,1,156.32,83.73Z" />
                            </svg>
                        </a>
                    </li>
                    <li class="md:ml-16 mt-3 md:mt-0">
                        <a href="#" class="hover:txt-gray-300">{{ __('Movies') }}</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="#" class="hover:txt-gray-300">{{ __('TV shows') }}</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="#" class="hover:txt-gray-300">{{ __('Actors') }}</a>
                    </li>
                </ul>
                <div class="flex flex-col md:flex-row items-center">
                    <div class="relative mt-3 md:mt-0">
                        <input type="text"
                            class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 py-1 focus:outline-none focus:shadow-outline text-sm"
                            placeholder="{{ __('Search') }}">
                        <div class="absolute top-0">
                            <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24">
                                <path class="heroicon-ui"
                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                            </svg>
                        </div>
                    </div>
                    <div class="md:ml-4 mt-3 md:mt-0">
                        <a href="#">
                            <img src="{{ asset('img/avatar.jpg') }}" alt="avatar" class=" rounded-full w-8 h-8">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireScripts

    @yield('custom-scripts')
</body>

</html>
