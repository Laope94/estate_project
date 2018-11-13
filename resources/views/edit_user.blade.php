<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Editácia používateľa
        </div>

        <div class="content">
            <form class="" action="{{ action('UserController@updateUser', ['id' => $user->id]) }}" method="get">
                <label>Meno: </label><input type="text" name="meno" value="{{ $user->meno }}"> <br /><br />
                <label>Priezvisko: </label><input type="text" name="priezvisko" value="{{ $user->priezvisko }}"> <br /><br />
                <label>Iban: </label><input type="text" name="iban" value="{{ $user->IBAN }}"> <br /><br />
                <label>Mesto:</label><input type="text" name="mesto" value="{{ $user->mesto }}"> <br /><br />
                <label>Adresa: </label><input type="string" name="adresa" value="{{ $user->adresa }}"> <br /><br />
                <label>Email: </label><input type="email" name="mail" value="{{ $user->mail }}"> <br /><br />
                <label>Telefón: </label><input type="number" name="tel_num" value="{{ $user->telefon }}"> <br /><br />
                <label>Telefón2: </label><input type="number" name="tel_num2" value="{{ $user->telefon2 }}"> <br /><br />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Upraviť">
            </form>
        </div>
    </div>
</div>
</body>
</html>
