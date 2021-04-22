@extends('layouts.app1')
@section('headcss')

@endsection
@section('headjs')

@endsection

@section('content')
@isset($message)
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
@endisset
<table class="table table-light">
    <thead>
        <th style="width: 14%">Naziv</th>
        <th style="width: 20%">Opis</th>
        <th style="width: 20%">Potrebna oprema</th>
        <th style="width: 10%">Broj ljudi</th>
        <th style="width: 12%">Grad</th>
        <th style="width: 15%">Datum</th>
        <th style="width: 13%">Vrijeme</th>
        <th style="width: 8%"></th>
    </thead>
    <tbody>
        @foreach ($dogadaji as $dogadaj)
            <tr>
                <td>
                    {{ $dogadaj->naziv }}
                </td>
                <td>
                    {{ $dogadaj->opis }}
                </td>
                <td>
                    {{ $dogadaj->potrebna_oprema }}
                </td>
                <td>
                    {{ $dogadaj->broj_ljudi }}
                </td>
                <td>
                    {{ $dogadaj->grad }}
                </td>
                <td>
                    {{ $dogadaj->datum }}
                </td>
                <td>
                    {{ $dogadaj->vrijeme_pocetka }}
                </td>
                <td>
                    <a href="" class="btn btn-primary">Prijavi dolazak</a>
                </td>
                <td>
                    <a href="/postaviupit/{{$dogadaj->id}}" class="btn btn-primary">Postavi upit</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
