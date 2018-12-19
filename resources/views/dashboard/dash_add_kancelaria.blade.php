@extends('layouts.dashboard_layout')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent
@endsection
@section('title', 'Pridať kanceláriu')
@section('content')
    @parent
    <form method="post">
        <h3>Informácie o kancelárii</h3>
        <div class="dash-flex">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="dash-input-container">
                <label for="estate_name">Názov: <span class="dash-field-required">*</span></label>
                <input id="estate_name" class="dash-input" type="text" name="estate_name" value="{{old('estate_name')}}" maxlength="40" required>
            </div>

            <div class="dash-input-container">
                <label for="konatel">Konateľ: <span class="dash-field-required">*</span></label>
                <input id="konatel" class="dash-input" type="text" maxlength="60" name="konatel"
                       value="{{old('konatel')}}" required>
            </div>

            <div class="dash-input-container">
                <label for="ico">IČO: <span class="dash-field-required">*</span></label>
                <input id="ico" class="dash-input" type="text" name="ico"
                       value="{{old('ico')}}" pattern="[0-9]{8,8}" required>
            </div>

            <div class="dash-input-container">
                <label for="dic">DIČ: <span class="dash-field-required">*</span></label>
                <input id="dic" class="dash-input" type="text" name="dic"
                       value="{{old('dic')}}" pattern="[0-9]{10,10}" required>
            </div>

            <div class="dash-input-container">
                <label for="kraj">Kraj: <span class="dash-field-required">*</span></label>
                <select id="kraj" class="dash-input" type="" name="kraj"
                        value="{{ old('kraj') }}" required autofocus>
                    <option disabled selected value>----------------------------------
                    </option>
                </select>
            </div>

            <div class="dash-input-container">
                <label for="okres">Okres: <span class="dash-field-required">*</span></label>
                <select id="okres" class="dash-input" type="" name="okres"
                        value="{{ old('okres') }}" required autofocus disabled>
                    <option disabled selected value>----------------------------------
                    </option>
                </select>
            </div>

            <div class="dash-input-container">
                <label for="city">Mesto: <span class="dash-field-required">*</span></label>
                <select id="city" class="dash-input" type="" name="city"
                        value="{{ old('city') }}" required autofocus disabled>
                    <option disabled selected value>----------------------------------
                    </option>
                </select>
            </div>

            <div class="dash-input-container">
                <label for="street">Ulica: <span class="dash-field-required">*</span></label>
                <input id="street" class="dash-input" type="text" name="street"
                       value="{{ old('street') }}" required maxlength="40" autofocus>
            </div>

            <div class="dash-input-container">
                <label for="tel_1">Telefónne číslo 1: <span class="dash-field-required">*</span></label>
                <input id="tel_1" class="dash-input" type="text" pattern="[0-9]{9,12}"
                       name="tel_1" required value="{{old('tel_1')}}">
            </div>

            <div class="dash-input-container">
                <label for="tel_2">Telefónne číslo 2: </label>
                <input id=tel_2 class="dash-input" type="text" pattern="[0-9]{9,12}"
                       name="tel_cislo" value="{{old('tel_2')}}">
            </div>

            <div class="dash-input-container" {{ $errors->has('email') ? ' has-error' : '' }}>
                <label for="email">Email: <span class="dash-field-required">*</span></label>
                <input id="email" class="dash-input" type="email" name="email" required
                       value="{{old('email')}}" maxlength="40">
            </div>

            <div class="dash-input-container">
                <label for="iban">IBAN: </label>
                <input id="iban" class="dash-input" class="login-field" type="text" name="iban" value="{{old('iban')}}" maxlength="60">
            </div>

            <div class="dash-button-wrapper">
                <div><span class="dash-field-required">*</span> Takto označené pole je
                    povinné.
                </div>
                <div>
                    <button type="submit" class="register-button">
                        Pridať kanceláriu
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/load-locations.js') }}"></script>
    <script>$(document).ready(function () {
            loadLocation();
        })</script>
@endsection