@extends('layouts.dashboard_layout')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent
@endsection
@section('title', 'Upraviť kanceláriu')
@section('content')
    @parent
    {{$village->district->region->name}}
    <form action="{{URL::to('/admin-tools/updateAgency')}}" method="post">
        <input type="hidden" name="uuid" value="{{$agency->UUID}}">
        <h3>Informácie o kancelárii</h3>
        <div class="dash-flex">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="dash-input-container">
                <label for="estate_name">Názov: <span class="dash-field-required">*</span></label>
                <input id="estate_name" class="dash-input" type="text" name="estate_name" value="{{$agency->name}}" maxlength="40" required>
            </div>

            <div class="dash-input-container">
                <label for="konatel">Konateľ: <span class="dash-field-required">*</span></label>
                <input id="konatel" class="dash-input" type="text" maxlength="60" name="konatel"
                       value="{{$agency->director}}" required>
            </div>

            <div class="dash-input-container">
                <label for="ico">IČO: <span class="dash-field-required">*</span></label>
                <input id="ico" class="dash-input" type="text" name="ico"
                       value="{{$agency->ICO}}" pattern="[0-9]{8,8}" required>
            </div>

            <div class="dash-input-container">
                <label for="dic">DIČ: <span class="dash-field-required">*</span></label>
                <input id="dic" class="dash-input" type="text" name="dic"
                       value="{{$agency->DIC}}" pattern="[0-9]{10,10}" required>
            </div>

            <div class="dash-input-container">
                <span id="h_kraj" hidden>{{$village->district->region->name}}</span>
                <label for="kraj">Kraj: <span class="dash-field-required">*</span></label>

                <span id="h_kraj" hidden>{{$village->district->region->name}}</span>
                <select id="kraj" class="dash-input" type="" name="kraj"
                        value="{{ old('kraj') }}" required autofocus>
                </select>

            </div>

            <div class="dash-input-container">
                <span id="h_okres" hidden>{{$village->district->name}}</span>
                <label for="okres">Okres: <span
                            class="dash-field-required">*</span></label>

                <span id="h_okres" hidden>{{$village->district->name}}</span>
                <select id="okres" class="dash-input" type="" name="okres"
                        value="{{ old('okres') }}" required autofocus>
                </select>

            </div>

            <div class="dash-input-container">
                <label for="city">Mesto: <span class="dash-field-required">*</span></label>
                <span id="h_mesto" hidden>{{$village->fullname}}</span>
                <span id="h_mesto" hidden>{{$village->fullname}}</span>
                <select id="city" class="dash-input" type="" name="city"
                        value="{{ old('city') }}" required autofocus>
                </select>

            </div>

            <div class="dash-input-container">
                <label for="street">Ulica: <span class="dash-field-required">*</span></label>
                <input id="street" class="dash-input" type="text" name="street"
                       value="{{$agency->address}}" required maxlength="40" autofocus>
            </div>

            <div class="dash-input-container">
                <label for="tel_1">Telefónne číslo 1: <span class="dash-field-required">*</span></label>
                <input id="tel_1" class="dash-input" type="text" pattern="[0-9]{9,12}"
                       name="tel_1" required value="{{$agency->phone}}">
            </div>

            <div class="dash-input-container">
                <label for="tel_2">Telefónne číslo 2: </label>
                <input id=tel_2 class="dash-input" type="text" pattern="[0-9]{9,12}"
                       name="tel_cislo" value="{{$agency->phone2}}">
            </div>

            <div class="dash-input-container" {{ $errors->has('email') ? ' has-error' : '' }}>
                <label for="email">Email: <span class="dash-field-required">*</span></label>
                <input id="email" class="dash-input" type="email" name="email" required
                       value="{{$agency->email}}" maxlength="40">
            </div>

            <div class="dash-input-container">
                <label for="iban">IBAN: </label>
                <input id="iban" class="dash-input" class="login-field" type="text" name="iban" value="{{$agency->IBAN}}" maxlength="60">
            </div>

            <div class="dash-button-wrapper">
                <div><span class="dash-field-required">*</span> Takto označené pole je
                    povinné.
                </div>
                <div>
                    <button type="submit" class="register-button">
                        Upraviť kanceláriu
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/load-locations.js') }}"></script>
    <script src="{{ asset('js/room-lock.js') }}"></script>
    <script src="{{ asset('js/fill-location.js') }}"></script>
    <script src="{{ asset('js/change-location.js') }}"></script>
    <script>$(window).on("load", function () {
            fillLocation();
        });</script>
@endsection