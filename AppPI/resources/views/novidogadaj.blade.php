@extends('layouts.app1')
@section('content')
    <form method="POST" action="/novidogadaj">
        @csrf
        <div class="form-group is-invalid" >

            <label for="naziv">Naziv događaja</label>
            <input type="text" class="form-control" id="naziv" placeholder="Naziv događaja" required>
            <div class="invalid-feedback">
                Morate unijeti naziv dogadaja
            </div>
        </div>

        <div class="form-group is-invalid">
            <label for="opis">Opis događaja</label>
            <textarea class="form-control" id="opis" rows="3" placeholder="Opis događaja" required></textarea>
            <div class="invalid-feedback">
                Morate upisati opis događaja.
            </div>
        </div>

        <div class="form-group is-invalid">
            <label for="datum">Datum odvijanja događaja</label>
              <input class="form-control" type="date" value="YYYY-MM-DD" id="datum" required>
              <div class="invalid-feedback">
                Morate unijeti ispravan datum.
            </div>
          </div>

          <div class="form-group is-invalid">
            <label for="vrijeme_pocetka">Vrijeme početka događaja</label>
              <input class="form-control" type="time" value="00:00:00" id="vrijeme_pocetka" required>
              <div class="invalid-feedback">
                Morate unijeti vrijeme početka.
            </div>
          </div>

        <div class="form-group is-invalid">
            <label for="potrebna_oprema">Potrebna oprema</label>
            <input type="text" class="form-control" id="potrebna_oprema">
        </div>

        <div class="form-group is-invalid">
            <label for="broj_ljudi">Maksimalan broh ljudi na događaju</label>
            <input type="number" class="form-control" value="0" id="broj_ljudi" required>
            <div class="invalid-feedback">
                Morate unijeti maksimalan broj ljudi.
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Potvrdi unos</button>
    </form>
@endsection
