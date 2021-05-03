@extends('layouts.app1')
@section('content')
    <style>
        h1 {
            margin-left: 7%;
            font-weight: 200;

        }
    </style>

        <h1 >Kreiranje upita</h1>
        <div class="form-group" >
            <label>Naziv događaja: {{ $dogadaj->naziv }}</label>
        </div>

        <div class="form-group" >
            <label>Opis događaja: {{ $dogadaj->opis }}</label>
        </div>

        <div class='form-group'>
            <label>Grad: {{ $dogadaj->grad }}</label>
        </div>

        <div class="form-group" >
            <label>Datum: {{ $dogadaj->datum }}</label>
        </div>


        <div class="form-group">
            <label>Vrijeme početka događaja: {{ $dogadaj->vrijeme_pocetka }}</label>
        </div>

        <div class="form-group">
            <label>Potrebna oprema: {{ $dogadaj->potrebna_oprema }}</label>
        </div>

        <div class="form-group">
            <label>Maksimalan broj ljudi na događaju: {{ $dogadaj->broj_ljudi }}</label>
        </div>



    <form method="POST" action="/postaviupit/{{ $dogadaj->id }}">
            @csrf
            <div class="form-group">
                <label for="opis_upita">Upit:</label>
                <textarea class="form-control" name="opis" id="opis" rows="3" required></textarea><br>
                <button class="btn btn-primary" type="submit">Pošalji upit</button>
            </div>
    </form>
@endsection
