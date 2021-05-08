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
        $dogadaj=Dogadaj::find($id);
        Users_on_dogadaj::create([
            'userID'=>Auth::user()->id,
            'dogadajID'=>$dogadaj->id,
            ]);
        
        $message="Uspješno ste se prijavili na događaj!";
        $dogadaji=Dogadaj::all();

        return view('dogadaji',compact('message','dogadaji'));
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
    public function destroy(Users_on_dogadaj $users_on_dogadaj)
    {
        //
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function dogadaj(){
        return $this->hasMany(User::class);
    }

    public function prijavljeni_dogadaji(){

        $prijavljenidogadaji=Auth::user()->users_on_dogadajs()->get();
        return view('prijavljenidogadaji', compact('prijavljenidogadaji'));
    }
}
