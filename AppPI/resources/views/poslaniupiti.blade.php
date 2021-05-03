@extends('layouts.app1')
@section('headcss')

@endsection
@section('headjs')

@endsection
@section('content')
<body>
    <h1>Poslani upiti</h1>
    <table class="table table-light">
        <thead>
            <th style="width: 14%">Događaj</th>
            <th style="width: 20%">Opis događaja</th>
            <th style="width: 20%">Grad</th>
            <th style="width: 10%">Datum</th>
            <th style="width: 12%">Moj upit</th>
            <th style="width: 15%">Odgovor</th>

        </thead>
        <tbody>
            @foreach ($upiti as $upit)
                <tr>
                    <td>
                        {{ $upit->dogadaj->naziv }}
                    </td>
                    <td>
                        {{ $upit->dogadaj->opis }}
                    </td>
                    <td>
                        {{ $upit->dogadaj->grad }}
                    </td>
                    <td>
                        {{ $upit->dogadaj->datum }}
                    </td>
                    <td>
                        {{ $upit->opis }}
                    </td>
                    <td>
                        {{ $upit->odgovor }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
