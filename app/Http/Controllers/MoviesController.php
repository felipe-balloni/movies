<?php

namespace App\Http\Controllers;

use App\Movie;
use Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    protected $page;
    protected $region;

    public function __construct()
    {
        $this->page = 1;
        $this->region = 'BR';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular?language=' . config('app.locale') . '&page=' . $this->page . '&region=' . $this->region)
            ->json()['results'];

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing?language=' . config('app.locale') . '&page=' . $this->page . '&region=' . $this->region)
            ->json()['results'];;

        $genresMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list?language=' . config('app.locale'))
            ->json();

        $genres = collect($genresMovies['genres'])->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

//         dump($popular);

        return view('index', compact('popularMovies', 'nowPlayingMovies', 'genres'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detailsMovie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'
                . $id
                . '?language=' . config('app.locale')
                . '&append_to_response=videos,credits,images'
                . '&include_image_language=en,null,' . config('app.locale')
            )
            ->json();

        $movie = collect($detailsMovie);
        $crews = collect($detailsMovie['credits']['crew'])
            ->filter(function ($crew) {
                return $crew['job'] == 'Director' or $crew['job'] == 'Screenplay';
            }
            )->groupBy('name');

        $jobs = $crews->groupBy('name')->transform(function ($item, $key) {
            return $item->groupBy($key);
        });

//         dd($crews, $jobs);

//         dump($movie, $crews, $jobs);

        return view('show', compact('movie', 'crews', 'jobs'));
    }

}
