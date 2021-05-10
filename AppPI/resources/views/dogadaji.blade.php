@extends('layouts.app1')
@section('headcss')

@endsection
@section('headjs')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js" defer></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endsection

@section('content')
@isset($message)
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
@endisset


<table id= 'table' class="table table-light">
    <thead>
        <th style="width: 14%">Naziv</th>
        <th style="width: 20%">Opis</th>
        <th style="width: 20%">Potrebna oprema</th>
        <th style="width: 10%">Broj ljudi</th>
        <th style="width: 12%">Grad</th>
        <th style="width: 15%">Datum</th>
        <th style="width: 13%">Vrijeme</th>
        <th style="width: 8%"></th>
        <th></th>
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
                    <form method="POST" action="/dogadaji/{{ $dogadaj->id }}">
                        @csrf
                        <button class="btn btn-primary" type="submit">Prijavi dolazak</button>
                    </form>
                </td>
                <td>
                    <a href="/postaviupit/{{$dogadaj->id}}" class="btn btn-primary">Postavi upit</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
<script>
    $(window).on("load", function () {
            $('#table').DataTable();
        });
</script>

@endsection
