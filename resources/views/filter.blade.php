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

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Filter
        </div>
        <form class="" action="{{URL::to('/filter')}}" method="get">
            <button type="submit">Reset filtra</button>
        </form>

        <div class="content">
            <form class="" action="{{URL::to('/filter')}}" method="get">
                <strong>Druh nehnuteľnosti: </strong> <br />
                <select name="type[]" >
                    <option name="type[]" value="Byt">Byt</option>
                    <option name="type[]" value="Dom">Dom</option>
                    <option name="type[]" value="Pozemok">Pozemok</option>
                </select><br /> <br />
                <strong>Typ:</strong> <br />
                <input type="checkbox" name="issale[]" value="0"> Prenájom<br />
                <input type="checkbox" name="issale[]" value="1"> Predaj<br /> <br />
                <strong>Cena </strong>
                od: <input type="number" name="min_price" value="{{\Illuminate\Support\Facades\Input::get('min_price')}}"> do:
                <input type="number" name="max_price" value="{{\Illuminate\Support\Facades\Input::get('max_price')}}"> <br /> <br />
                <strong>Rozloha (m2) </strong>
                od: <input type="number" name="min_area" value="{{\Illuminate\Support\Facades\Input::get('min_area')}}"> do:
                <input type="number" name="max_area" value="{{\Illuminate\Support\Facades\Input::get('max_area')}}"> <br /> <br />
                <strong>Počet izieb:</strong>
                <input type="number" name="room_number" value="{{\Illuminate\Support\Facades\Input::get('room_number')}}"> <br /><br />
                <button type="submit" name="find">Nájsť</button>
            </form>

                <br>
                <hr>
                <table border="3">
                    <tr>
                        <td>Počet izieb</td>
                        <td>Typ nehnuteľnosti</td>
                        <td>Plocha</td>
                        <td>Mesto/dedina</td>
                        <td>Cena</td>
                        <td>Predaj/prenájom</td>
                    </tr>

                    @foreach($estates as $estate)
                    <tr>
                        <td>{{$estate->room_number}}</td>
                        <td>{{$estate->type}}</td>
                        <td>{{$estate->area}}</td>
                        <td>{{$estate->village}}</td>
                        <td>{{$estate->price}}</td>
                        <td>@if($estate->issale == 0) Prenájom @else Predaj @endif</td>
                    </tr>
                    @endforeach
                </table>
        </div>
    </div>
</div>
</body>
</html>
