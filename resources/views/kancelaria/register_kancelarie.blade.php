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
            Registrácia kancelárie
        </div>

        <div class="content">
            <form class="" action="{{URL::to('/registraciaKancelarie')}}" method="post">
                <label>Názov: </label><input type="text" name="nazov" value=""> <br /><br />
                <label>Konateľ: </label><input type="text" name="konatel" value=""> <br /><br />
                <label>Adresa: </label><input type="text" name="adresa" value=""> <br /><br />
                <label>Telefónne číslo: </label><input type="number" name="tel_cislo" value=""> <br /><br />
                <label>Email: </label><input type="email" name="email" value=""> <br /><br />
                <label>IBAN: </label><input type="text" name="iban" value=""> <br /><br />
                <label>IČO: </label><input type="text" name="ico" value=""> <br /><br />
                <label>DIČ: </label><input type="text" name="dic" value=""> <br /><br />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" name="register">Registrovať</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
