<?php

namespace App\Http\Controllers;

use App\ViewModels\ActorsViewModel;
use App\ViewModels\ActorViewModel;
use Illuminate\Support\Facades\Http;

class ActorsController extends Controller
{

    protected $region;
    protected $token;

    public function __construct()
    {
        $this->region = 'BR';
        $this->token = config('services.tmdb.token');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($page = 1)
    {
        abort_if($page > 500, 204);

        $popularActors = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/person/popular?language=' . config('app.locale') . '&page=' . $page)
            ->json()['results'];

        $viewModel = new ActorsViewModel($popularActors, $page);

        return view('actors.index', $viewModel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {

        //        ->get('https://api.themoviedb.org/3/movie/popular?language=' . config('app.locale') . '&page=' . $this->page . '&region=' . $this->region)

        $actor = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/person/' . $id . '?language=' . config('app.locale'))
            ->json();

        $social = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/person/' . $id . '/external_ids?language=' . config('app.locale'))
            ->json();

        $credits = Http::withToken($this->token)
            ->get('https://api.themoviedb.org/3/person/' . $id . '/combined_credits?language=' . config('app.locale'))
            ->json();

        $viewModel = new ActorViewModel($actor, $social, $credits);

        return view('actors.show', $viewModel);
    }
}
