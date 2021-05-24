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
<h1>Moji događaji</h1><br>
<table class="table table-light">
    <thead>
        <th style="width: 10%">Naziv</th>
        <th style="width: 10%">Opis</th>
        <th style="width: 10%">Potrebna oprema</th>
        <th style="width: 10%">Broj ljudi</th>
        <th style="width: 10%">Grad</th>
        <th style="width: 10%">Datum</th>
        <th style="width: 10%">Vrijeme</th>
        <th style="width: 8%"></th>
        <th style="width: 8%"></th>
    </thead>
    <tbody>
        @foreach ($mojidogadaji as $dogadaj)
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
                    <a href="/mojidogadaji/{{ $dogadaj->id }}/izmjenadogadaja" class="btn btn-primary">Izmjena</a>
                </td>
                <td>
                    <form method="DELETE" action="/mojidogadaji/{{ $dogadaj->id }}">
                        @csrf
                        <button class="btn btn-primary" type="submit">Brisanje</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
