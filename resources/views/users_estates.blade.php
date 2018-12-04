<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
</head>
<body>
<a href=" {{ URL::to('/pridanie-inzeratu') }}"><button>Pridať inzerát</button></a><br /><br />
<table border="3">
    {{$user->name}}{{$user->surname}}
    <tr>
        <td>Ulica</td>
        <td>Rozsah</td>
        <td>id</td>

    </tr>
    @foreach($user->estates as $inzerat)
        <tr>
            <td>{{ $inzerat->street}}</td>

            <td>{{ $inzerat->area }}</td>
            <td>{{ $inzerat->id }}</td>
            <td><a href="{{ action("InzeratController@showAction", ['id' => $inzerat->id]) }}"><button class="btn btn-default">Edit</button></a>&nbsp;
                <a href = 'delete/{{ $inzerat->id }}'><button class="btn btn-danger">Delete</button></a>
        </tr>
    @endforeach
</table>
</body>
</html>