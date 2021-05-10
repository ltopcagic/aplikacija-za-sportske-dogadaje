@extends('layouts.app1')
@section('content')
@include('layouts.errors')
    <style>
        h1 {
            margin-left: 7%;
            font-weight: 200;

        }
    </style>
    <form method="POST" action="/novidogadaj">
        @csrf
        
        
        <h1 >Novi događaj</h1>
        <div class="form-group" >
            <label for="naziv">Naziv događaja:</label>
            <input type="text" class="form-control" id="naziv" name="naziv"placeholder="Naziv događaja" required>
        </div>

        <div class="form-group" >
            <label for="opis">Opis događaja:</label>
            <input type="text" class="form-control" id="opis" name="opis"placeholder="Opis događaja" required>
        </div>

        <div class='form-group'>
            <label for="grad">Izaberite grad:</label><br>
            <select name="grad" id="grad" required style="font-size: 20px">
                <option value="Zagreb">Zagreb</option>
                <option value="Karlovac">Karlovac</option>
                <option value="Osijek">Osijek</option>
                <option value="Slavonski Brod">Slavonski Brod</option>
                <option value="Sisak">Sisak</option>
                <option value="Zadar">Zadar</option>
                <option value="Šibenik">Šibenik</option>
                <option value="Split">Split</option>
                <option value="Dubrovnik">Dubrovnik</option>
                <option value="Rijeka">Rijeka</option>
                <option value="Pula">Pula</option>
            </select>
        </div>

        <div class="form-group" >
            <label for="date">Datum:</label>
            <input type="date" class="form-control" id="datum" name="datum" value="YYYY-MM-DD"required>
        </div>


          <div class="form-group">
            <label for="vrijeme_pocetka">Vrijeme početka događaja:</label>
              <input class="form-control" type="time" name="vrijeme_pocetka"  id="vrijeme_pocetka" required>
          </div>

        <div class="form-group">
            <label for="potrebna_oprema">Potrebna oprema:</label>
            <input type="text" class="form-control" id="potrebna_oprema" name="potrebna_oprema" required>
        </div>

        <div class="form-group">
            <label for="broj_ljudi">Maksimalan broj ljudi na događaju:</label>
            <input type="number" class="form-control" value="0" id="broj_ljudi" name="broj_ljudi" required>
        </div>

        <button class="btn btn-primary" type="submit" style="margin-left: 7%">Potvrdi unos</button>

        @include('layouts.alerts')
    </form>
@endsection
