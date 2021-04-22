<?php

namespace App\Http\Controllers;

use App\Models\Upit;
use App\Models\Dogadaj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpitController extends Controller
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
    public function create($id)
    {
        $dogadaj=Dogadaj::find($id);
        return view('postaviupit', compact('dogadaj'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $dogadaj=Dogadaj::find($id);
        $request->validate([
            'opis' => 'min:5 | required ',
        ]);
        Upit::create([
            'userID'=>Auth::user()->id,
            'dogadajID'=>$dogadaj->id,
            'opis'=>$request->opis,
        ]);
        return redirect('/dogadaji');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upit  $upit
     * @return \Illuminate\Http\Response
     */
    public function show(Upit $upit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upit  $upit
     * @return \Illuminate\Http\Response
     */
    public function edit(Upit $upit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upit  $upit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upit $upit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upit  $upit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upit $upit)
    {
        //
    }
}
