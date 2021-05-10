@extends('layouts.app1')
@section('content')
<style>
    h1 {
        margin-left: 7%;
        font-weight: 200;
    }
</style>

<body>

    <table class="table table-light">
            <thead>
                <th><h1 >Dolazni upiti</h1></th>
            </thead>
            <tbody>
                @foreach ($upiti as $upit)
                <tr>
                    <td>
                        <div class="form-group" >
                            <label>Naziv događaja: {{ $upit->dogadaj->naziv }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group" >
                            <label>Opis događaja: {{ $upit->dogadaj->opis }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class='form-group'>
                            <label>Grad: {{ $upit->dogadaj->grad }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group" >
                            <label>Datum: {{ $upit->dogadaj->datum }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group" >
                            <label>Upit: {{ $upit->opis }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/dolazniupiti/{{$upit->id}}/odgovor" class="btn btn-primary" style="margin-left: 7%">Odgovori</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</body>
@endsection
