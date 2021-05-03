@extends('layouts.app1')
@section('content')
    <style>
        h1 {
            margin-left: 7%;
            font-weight: 200;

        }
    </style>

        <h1 >Odgovor na upit</h1>
        <div class="form-group" >
            <label>Naziv događaja: {{ $upit->dogadaj->naziv }}</label>
        </div>

        <div class="form-group" >
            <label>Opis događaja: {{ $upit->dogadaj->opis }}</label>
        </div>

        <div class='form-group'>
            <label>Grad: {{ $upit->dogadaj->grad }}</label>
        </div>

        <div class="form-group" >
            <label>Datum: {{ $upit->dogadaj->datum }}</label>
        </div>


        <div class="form-group">
            <label>Upit: {{ $upit->opis }}</label>
        </div>



    <form method="POST" action="/dolazniupiti/{{ $upit->id }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="opis_upita">Odgovor:</label>
                <textarea class="form-control" name="odgovor" id="odgovor" rows="3" required></textarea><br>
                <button class="btn btn-primary" type="submit">Odgovori</button>
            </div>
    </form>
@endsection
