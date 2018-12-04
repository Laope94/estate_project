<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
</head>
<body>

<table border="3">
    <tr>
        <td>id</td>
        <td>Ulica</td>
        <td>Plocha</td>
        <td>Cena</td>
        <td>Počet izieb</td>
        <td>Poschodie</td>
        <td>Popis</td>
        <td>typ</td>
        <td>obec</td>
        <td>napredaj</td>
    </tr>
    @foreach($inzeraty as $inzerat)
        <tr>
            <td>{{ $inzerat->id }}</td>
            <td>{{ $inzerat->street }}</td>
            <td>{{ $inzerat->area }}</td>
            <td>{{ $inzerat->price }}</td>
            <td>{{ $inzerat->room_number }}</td>
            <td>{{ $inzerat->floors }}</td>
            <td>{{ $inzerat->description }}</td>
            <td>{{ $inzerat->type }}</td>
            <td>{{ $inzerat->fullname }}</td>
            <td>{{ $inzerat->issale }}</td>

        </tr>
    @endforeach
</table>
</body>
</html>