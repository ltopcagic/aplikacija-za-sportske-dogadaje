@extends('layouts.app1')
@section('content')
<style>
    h1 {
        margin-left: 7%;
        font-weight: 200;
    }
</style>

<body>

    <h1 >Dolazni upiti</h1>
    <table class="table table-light">
        @foreach ($upiti as $upit)
            <thead>
                <th>{{ $upit->dogadaj->naziv }}</th>
            </thead>
            <tbody>
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
                        <form method="POST" action="/postaviupit/{{ $dogadaj->id }}">
                        @csrf
                        @method('put')
                            <div class="form-group">
                                <label for="opis_upita">Odgovor:</label>
                                <textarea class="form-control" name="odgovor" id="odgovor" rows="3" required></textarea><br>
                                <button class="btn btn-primary" type="submit" style="margin-left: 7%">Odgovori</button>
                            </div>
                         </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</body>
@endsection
