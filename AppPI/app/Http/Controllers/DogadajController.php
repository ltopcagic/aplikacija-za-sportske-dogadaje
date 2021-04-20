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
        //dd(Dogadaj::notUsers()->get()); // Dogadaji koje user nije atendao
        //dd(Auth::user()->dogadaj); User kreirani događaji
        $dogadaji=Dogadaj::notUsers()->get();
        return view('dogadaji', compact('dogadaji'));
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
            $dateToday = new Carbon(now());  //korištenje Carbon extenzije za dohvacanje datuma i manipulacijom date-time tipovima podataka

            if($request->datum > $dateToday){
                $request->validate([
                    'naziv' => 'min:4 | required ',
                    'grad'=> 'required',
                    'opis' => 'min:5 | required',
                    'broj_ljudi' => 'required',
                    'vrijeme_pocetka' => 'required',
                    'datum' => 'required | after:yesterday',
                ]);
            }else{                                       //Radimo validaciju odnsono provjeru, ako je datum veci od danasnjeg onda normalno validiramo sve, a ako je datum danas onda gledamo da vrijeme mora biti vece od sadasnjeg
                $request->validate([
                'naziv' => 'min:4 | required ',
                'grad'=> 'required',
                'opis' => 'min:5 | required',
                'broj_ljudi' => 'required',
                'vrijeme_pocetka' => 'required | after:now',
                'datum' => 'required | after:yesterday',
            ]);}

            Dogadaj::create([
                'userID'=>Auth::user()->id,
                'naziv'=>$request->naziv,
                'opis'=>$request->opis,
                'grad'=>$request->grad,
                'datum'=>$request->datum,
                'vrijeme_pocetka'=>$request->vrijeme_pocetka,
                'broj_ljudi'=>$request->broj_ljudi,
                'potrebna_oprema'=>$request->potrebna_oprema,
            ]);

            $message="Successfuly Added";
            $dogadaji=Dogadaj::all();


        //$a=Carbon::createFromFormat('m-d-Y', $request->date)->format('d-m-Y');
        //$b=Carbon::createFromFormat('hh:mm', $request->vrijeme_pocetka)->format('hh-mm-ss');
        //$a =Carbon::parse($request->datum)->format('Y-m-d');
        //$b = Carbon::parse($request->vrijeme_pocetka)->format('hh-mm-ss');
        //$novidatum = Carbon::parse($request->date)->toDateString();
        //novovrijeme = Carbon::parse($request->vrijeme_pocetka)->toTimeString();

        return view('dogadaji', compact('message', 'dogadaji'));  //prosljedivanje poruke i objekata dogadaji
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
       /* $dogadaji=Dogadaj::Users()->get();
        return view('mojidogadaji');*/
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

    public function moji_dogadaji(){
        
        $mojidogadaji=Auth::user()->dogadaj;
        return view('mojidogadaji', compact('mojidogadaji'));
    }
}
