<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{

    public $search = '';
    public $page = 1;
    public $region = 'BR';

    public function render()
    {
        $searchResults = [];

        if (strlen($this->search) >= 2) {
            $searchResults = collect(Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query=' . $this->search . '&language=' . config('app.locale') . '&page=' . $this->page . '&region=' . $this->region)
                ->json()['results'])->take(7);
        };

//        dump($searchResults);

        return view('livewire.search-dropdown', compact('searchResults'));
    }
}
