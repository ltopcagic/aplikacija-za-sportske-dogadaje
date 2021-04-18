<?php

namespace App\Http\Controllers;

use App\Models\Dogadaj;
use Illuminate\Http\Request;

class DogadajController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Dogadaj::create([
            'naziv'=>$request->naziv,
            'opis'=>$request->opis,
            'datum'=>$request->datum,
            'vrijeme_pocetka'=>$request->vrijeme_pocetka,
            'broj_ljudi'=>$request->broj_ljudi,
            'potrebna_oprema'=>$request->oprema,
        ]);

        return redirect('/dogadaji');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dogadaj  $dogadaj
     * @return \Illuminate\Http\Response
     */
    public function show(Dogadaj $dogadaj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dogadaj  $dogadaj
     * @return \Illuminate\Http\Response
     */
    public function edit(Dogadaj $dogadaj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dogadaj  $dogadaj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dogadaj $dogadaj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dogadaj  $dogadaj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dogadaj $dogadaj)
    {
        //
    }
}
