<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Libraries\PokeApi;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function link(Request $request)
    {
        // $pokemons = (new PokeApi)->index('/pokemon')->collect();
        // dd($pokemons['results']);
        // return $request;
        $pokemons = Http::get($request->link)->collect();

        // dd($pokemons['next']);

        return view('pokemon')->with(['pokemons' => $pokemons]);
    }
}
