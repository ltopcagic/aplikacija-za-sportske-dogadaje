@extends('layouts.app1')
@section('headcss')

@endsection
@section('headjs')

@endsection

<body>
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
                        {{ $upit->dogadajID->naziv }}
                    </td>
                    <td>
                        {{ $upit->dogadajID->opis }}
                    </td>
                    <td>
                        {{ $upit->dogadajID->grad }}
                    </td>
                    <td>
                        {{ $upit->dogadajID->datum }}
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
