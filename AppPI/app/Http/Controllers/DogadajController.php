<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dogadaj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DogadajController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dogadaji');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novidogadaj');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $dateToday = new Carbon(now());

            if($request->datum > $dateToday){
                $request->validate([
                    'naziv' => 'min:4 | required ',
                    'opis' => 'min:5 | required',
                    'broj_ljudi' => 'required',
                    'vrijeme_pocetka' => 'required',
                    'datum' => 'required | after:yesterday',
                ]);
            }else{
                $request->validate([
                'naziv' => 'min:4 | required ',
                'opis' => 'min:5 | required',
                'broj_ljudi' => 'required',
                'vrijeme_pocetka' => 'required | after:now',
                'datum' => 'required',
            ]);}


            $dogadaj = Dogadaj::create([
                'userID'=>Auth::user()->id,
                'naziv'=>$request->naziv,
                'opis'=>$request->opis,
                'datum'=>$request->datum,
                'vrijeme_pocetka'=>$request->vrijeme_pocetka,
                'broj_ljudi'=>$request->broj_ljudi,
                'potrebna_oprema'=>$request->potrebna_oprema,
            ]);

            $message="Successfuly Added";


        //$a=Carbon::createFromFormat('m-d-Y', $request->date)->format('d-m-Y');
        //$b=Carbon::createFromFormat('hh:mm', $request->vrijeme_pocetka)->format('hh-mm-ss');
        //$a =Carbon::parse($request->datum)->format('Y-m-d');
        //$b = Carbon::parse($request->vrijeme_pocetka)->format('hh-mm-ss');
        //$novidatum = Carbon::parse($request->date)->toDateString();
        //novovrijeme = Carbon::parse($request->vrijeme_pocetka)->toTimeString();

        return view('dogadaji', compact('message', 'dogadaj'));
        //return redirect('/dogadaji')->compact('message');
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
