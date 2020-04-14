<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\TvViewModel;
use App\ViewModels\TvShowViewModel;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
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
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function index()
    {
        $popularTv = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/tv/popular?language=' . config('app.locale') . '&page=' . $this->page)
            ->throw()
            ->json()['results'];

        $topRatedTv = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/tv/top_rated?language=' . config('app.locale') . '&page=' . $this->page)
            ->throw()
            ->json()['results'];

        $genres = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/genre/tv/list?language=' . config('app.locale'))
            ->throw()
            ->json()['genres'];

        $viewModel = new TvViewModel(
            $popularTv,
            $topRatedTv,
            $genres,
        );

        return view('tv.index', $viewModel);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function show($id)
    {
        $tvshow = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/tv/'
                . $id
                . '?language=' . config('app.locale')
                . '&append_to_response=credits,videos,images'
                . '&include_image_language=en,null,' . config('app.locale')
            )

//                .$id.'?append_to_response=credits,videos,images')
//                https://api.themoviedb.org/3/movie/157336/videos?api_key={api_key}

            ->throw()
            ->json();

        $viewModel = new TvShowViewModel($tvshow);

        return view('tv.show', $viewModel);
    }

}
