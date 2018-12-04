<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
</head>
<body>
<table border="3">
    <tr>
        <td>Meno</td>
        <td>Priezvisko</td>
        <td>IBAN</td>
        <td>Mesto</td>
        <td>Adresa</td>
        <td>E-mail</td>
        <td>Telefón</td>
        <td>Telefón 2</td>
        <td>Akcia</td>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->IBAN }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->phone2 }}</td>
            <td><a href="{{ action("UserController@showAction", ['id' => $user->id]) }}"><button class="btn btn-default">Edit</button></a>&nbsp;
                <a href = 'delete-user/{{ $user->id }}'><button class="btn btn-danger">Delete</button></a>
        </tr>
    @endforeach
</table>
</body>
</html>