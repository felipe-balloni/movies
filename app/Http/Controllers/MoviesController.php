<?php

namespace App\Http\Controllers;

use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    protected $page;
    protected $region;
    protected $token;

    public function __construct()
    {
        $this->page = 1;
        $this->region = 'BR';
        $this->token = config('services.tmdb.token');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $popularMovies = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/movie/popular?language=' . config('app.locale') . '&page=' . $this->page . '&region=' . $this->region)
            ->throw()
            ->json()['results'];

        $nowPlayingMovies = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/movie/now_playing?language=' . config('app.locale') . '&page=' . $this->page . '&region=' . $this->region)
            ->throw()
            ->json()['results'];

        $genres = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/genre/movie/list?language=' . config('app.locale'))
            ->throw()
            ->json()['genres'];

        $viewModel = new MoviesViewModel(
            $popularMovies,
            $nowPlayingMovies,
            $genres
        );

        return view('movies.index', $viewModel);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'
                . $id
                . '?language=' . config('app.locale')
                . '&append_to_response=videos,credits,images'
                . '&include_image_language=en,null,' . config('app.locale')
            )
            ->json();

        $viewModel = new MovieViewModel($movie);

        return view('movies.show', $viewModel);
    }

}
