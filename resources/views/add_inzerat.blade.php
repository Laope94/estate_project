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
            Pridávanie inzerátov
        </div>

        <div class="content">
            <form class="" action="{{URL::to('/pridajInzerat')}}" method="post">
                <h5>Políčka označené * je potrebné vyplniť!</h5> <br /><br />
                <label>*Názov inzerátu: </label><input type="text" name="nadpis" value=""> <br /><br />
                <label>Ulica: </label><input type="text" name="ulica" value=""> <br /><br />
                <label>*Plocha (m2): </label><input type="number" name="plocha" value=""> <br /><br />
                <label>*Cena: </label><input type="number" name="cena" value=""> <br /><br />
                <label>*Počet izieb: </label><input type="number" name="pocet_izieb" value=""> <br /><br />
                <label>*Poschodie: </label><input type="number" name="poschodie" value=""> <br /><br />
                <label>*Popis </label><textarea rows="3" type="text-" name="popis" value=""></textarea> <br /><br />
                <label>*Typ nehnuteľnosti: </label>
                <select name="typ_nehnutelnosti">
                    <option value=""></option>
                    <option value="1">Byt</option>
                    <option value="2">Garsónka</option>
                    <option value="3">Pozemok</option>
                    <option value="4">Rodinný dom</option>
                </select> <br /> <br />
                <label>*Okres: </label>
                <select name="okres">
                    <option value=""></option>
                    <option value="1">Bánovce nad Bebravou</option>
                    <option value="2">Banská Bystrica</option>
                    <option value="3">Banská Štiavnica</option>
                </select> <br /> <br />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" name="register">Pridať inzerát</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
