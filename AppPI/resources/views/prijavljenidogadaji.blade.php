@extends('layouts.app1')
@section('headcss')

@endsection
@section('headjs')

@endsection
<style>
    div {
        margin-left: 10%;
        margin-right: 10%;
    }
</style>

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
        <th style="width: 8%"></th>
    </thead>
    <tbody>
        @foreach ($prijavljenidogadaji as $dogadaj)
            <tr>
                <td>
                    {{ $dogadaj->dogadaj->naziv }}
                </td>
                <td>
                    {{ $dogadaj->dogadaj->opis }}
                </td>
                <td>
                    {{ $dogadaj->dogadaj->potrebna_oprema }}
                </td>
                <td>
                    {{ $dogadaj->dogadaj->broj_ljudi }}
                </td>
                <td>
                    {{ $dogadaj->dogadaj->grad }}
                </td>
                <td>
                    {{ $dogadaj->dogadaj->datum }}
                </td>
                <td>
                    {{ $dogadaj->dogadaj->vrijeme_pocetka }}
                </td>
                <td>
                    <a href="" class="btn btn-primary">Otkaži prijavu</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
