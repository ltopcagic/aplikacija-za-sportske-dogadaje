<?php

namespace App\Http\Controllers;

use App\Models\Dogadaj;
use Illuminate\Http\Request;
use App\Models\Users_on_dogadaj;
use Illuminate\Support\Facades\Auth;

class UsersOnDogadajController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user()->id;
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
    public function store($id)
    {

        $dogadaj=Dogadaj::withCount('users_on_dogadajs')->find($id);
        $brojPrijavljenihLjudi = $dogadaj->users_on_dogadajs_count;
        $dogadaji=Dogadaj::notUsers()->notCreated()->get();
        if($brojPrijavljenihLjudi>= $dogadaj->broj_ljudi){
            $message="Ovaj događaj je popunjen";
            return view('dogadaji', compact('message', 'dogadaji'));
        }else{
            $message="Uspješno ste prijavili događaj";
            Users_on_dogadaj::create([
                'userID'=>Auth::user()->id,
                'dogadajID'=>$dogadaj->id,
                ]);
                $dogadaji=Dogadaj::notUsers()->notCreated()->get();
                return view('dogadaji', compact('message', 'dogadaji'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users_on_dogadaj  $users_on_dogadaj
     * @return \Illuminate\Http\Response
     */
    public function show(Users_on_dogadaj $users_on_dogadaj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users_on_dogadaj  $users_on_dogadaj
     * @return \Illuminate\Http\Response
     */
    public function edit(Users_on_dogadaj $users_on_dogadaj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users_on_dogadaj  $users_on_dogadaj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users_on_dogadaj $users_on_dogadaj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users_on_dogadaj  $users_on_dogadaj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dogadaj $dogadaj)
    {
        $dogadaj->users_on_dogadajs()->where('userID', 'like', Auth::user()->id)->delete();
        return redirect()->back();
    }

    public function prijavljeni_dogadaji(){

        $prijavljenidogadaji=Dogadaj::attendUsers()->get();
        return view('prijavljenidogadaji', compact('prijavljenidogadaji'));
    }
}
