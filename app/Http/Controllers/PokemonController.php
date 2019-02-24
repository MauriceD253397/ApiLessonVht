<?php

namespace App\Http\Controllers;

use App\pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPokemon = Pokemon::all();
        return view('Pokemon/Master', [
            'allPokemon' => $allPokemon
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(pokemon $pokemon)
    {
        //
    }
}
