<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Libraries\PokeApi;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = (new PokeApi)->index('/pokemon')->collect();

        // $pokemons = Http::get("https://pokeapi.co/api/v2/");

        return view('pokemon')->with(['pokemons' => $pokemons]);
    }

    public function show($id)
    {
        $pokemons = (new PokeApi)->index('/pokemon/' . $id)->collect();

        // $pokemons = Http::get("https://pokeapi.co/api/v2/");

        return view('detail')->with(['pokemons' => $pokemons]);
    }
}
