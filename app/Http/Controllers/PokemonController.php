<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Libraries\PokeApi;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(Request $request)
    {
        // $pokemons = (new PokeApi)->index('/pokemon')->collect();
        // dd($pokemons['results']);
        
        $pokemons = Http::get("https://pokeapi.co/api/v2/pokemon/")->collect();

        // dd($pokemons['next']);

        return view('pokemon')->with(['pokemons' => $pokemons]);
    }

    public function show($id)
    {
        $pokemons = (new PokeApi)->index('/pokemon/' . $id)->collect();
        // dd($pokemons);
        return view('detail')->with(['pokemons' => $pokemons]);
    }

    public function search(Request $request)
    {
        $pokemons = (new PokeApi)->index('/pokemon/' . $request->id)->collect();

        return view('detail')->with(['pokemons' => $pokemons]);
    }
}
