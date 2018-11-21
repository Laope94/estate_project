<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
</head>
<body>
    <a href=" {{ URL::to('/pridanie-inzeratu') }}"><button>Pridať inzerát</button></a><br /><br />
    <table border="3">
        <tr>
            <td>Nadpis</td>
            <td>Ulica</td>
            <td>Plocha</td>
            <td>Cena</td>
            <td>Počet izieb</td>
            <td>Poschodie</td>
            <td>Popis</td>
            <td>Akcia</td>
        </tr>
        @foreach($inzeraty as $inzerat)
            <tr>
                <td>{{ $inzerat->nadpis }}</td>
                <td>{{ $inzerat->ulica }}</td>
                <td>{{ $inzerat->plocha }}</td>
                <td>{{ $inzerat->cena }}</td>
                <td>{{ $inzerat->pocet_izieb }}</td>
                <td>{{ $inzerat->poschodie }}</td>
                <td>{{ $inzerat->popis }}</td>
                <td><a href="{{ action("InzeratController@showAction", ['id' => $inzerat->id]) }}"><button class="btn btn-default">Edit</button></a>&nbsp;
                    <a href = 'delete/{{ $inzerat->id }}'><button class="btn btn-danger">Delete</button></a>
            </tr>
        @endforeach
    </table>
</body>
</html>