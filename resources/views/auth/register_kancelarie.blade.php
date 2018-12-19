@extends('layouts.master_layout')
@section('title', 'Registrácia kancelárie')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent
    <div class="content-container">
        <div class="overlay">
            <div class="login-register-container">
                <div class="flex-container">
                    <div class="register-card">
                        <h2 class="register-title">Registrácia kancelárie</h2>
                        <form class="" action="{{URL::to('/registraciaKancelarie')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="register-inner-flex">
                                <div class="register-half">
                                    <h3 class="login-title">Informácie o kancelárii</h3>
                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="estate_name">Názov: <span class="login-field-required">*</span></label>
                                            <div>
                                                <input id="estate_name" class="login-field" type="text"
                                                       name="estate_name" value="{{old('estate_name')}}" required maxlength="40">
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="konatel">Konateľ: <span
                                                        class="login-field-required">*</span></label>
                                            <div>
                                                <input id="konatel" class="login-field" type="text" name="konatel"
                                                       value="{{old('konatel')}}" required maxlength="60"></div>
                                        </div>
                                    </div>
                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="ico">IČO: <span class="login-field-required">*</span></label>
                                            <div>
                                                <input id="ico" type="text" class="login-field" name="ico"
                                                       value="{{old('ico')}}" pattern="[0-9]{8,8}" required>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="dic">DIČ: <span class="login-field-required">*</span></label>
                                            <div>
                                                <input id="dic" class="login-field" type="text" name="dic"
                                                       value="{{old('dic')}}" pattern="[0-9]{10,10}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="kraj">Kraj: <span class="login-field-required">*</span></label>
                                            <div>
                                                <select id="kraj" class="login-field" type="" name="kraj"
                                                        value="{{ old('kraj') }}" required autofocus>
                                                    <option disabled selected value>----------------------------------
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="okres">Okres: <span
                                                        class="login-field-required">*</span></label>
                                            <div>
                                                <select id="okres" class="login-field" type="" name="okres"
                                                        value="{{ old('okres') }}" required autofocus disabled>
                                                    <option disabled selected value>----------------------------------
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="city">Mesto: <span class="login-field-required">*</span></label>
                                            <div>
                                                <select id="city" class="login-field" type="" name="city"
                                                        value="{{ old('city') }}" required autofocus disabled>
                                                    <option disabled selected value>----------------------------------
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="street">Ulica: <span
                                                        class="login-field-required">*</span></label>
                                            <div>
                                                <input id="street" type="text" class="login-field" name="street"
                                                       value="{{ old('street') }}" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="tel_1">Telefónne číslo 1: <span
                                                        class="login-field-required">*</span></label>
                                            <div>
                                                <input id="tel_1" class="login-field" type="text" pattern="[0-9]{9,12}"
                                                       name="tel_1" required value="{{old('tel_1')}}">
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="tel_2">Telefónne číslo 2: </label>
                                            <div>
                                                <input id=tel_2 class="login-field" type="text" pattern="[0-9]{9,12}"
                                                       name="tel_cislo" value="{{old('tel_2')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="register-small-flex">
                                        <div class="login-field-container" {{ $errors->has('email') ? ' has-error' : '' }}>
                                            <label for="email">Email: <span
                                                        class="login-field-required">*</span></label>
                                            <div>
                                                <input id="email" class="login-field" type="email" name="email" required
                                                       value="{{old('email')}}" maxlength="40">
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="iban">IBAN: </label>
                                            <div>
                                                <input id="iban" class="login-field" type="text" name="iban"
                                                       value="{{old('iban')}}" maxlength="60">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="register-half">
                                    <h3 class="login-title">Informácie o administrátorovi</h3>
                                    <div class="register-small-flex">
                                        <div>
                                            <div class="login-field-container {{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="name">Meno: <span
                                                            class="login-field-required">*</span></label>
                                                <div>
                                                    <input id="name" class="login-field" type="text" name="name"
                                                           value="{{ old('name') }}" required autofocus maxlength="40">
                                                </div>
                                            </div>
                                            <div class="login-field-container">
                                                <label for="surname">Priezvisko: <span
                                                            class="login-field-required">*</span></label>
                                                <div>
                                                    <input id="surname" class="login-field" type="text" name="surname"
                                                           value="{{ old('surname') }}" required autofocus maxlength="40">
                                                </div>
                                            </div>
                                            <div class="login-field-container">
                                                <label for="tel_a">Telefónne číslo: <span
                                                            class="login-field-required">*</span></label>
                                                <div>
                                                    <input id="tel_a" class="login-field" type="text" pattern="[0-9]{9,12}" name="tel_a"
                                                           required value="{{old('tel_a')}}">
                                                </div>
                                            </div>
                                            <div class="login-field-container {{ $errors->has('email_a') ? ' has-error' : '' }}">
                                                <label for="email_a">E-Mail: <span
                                                            class="login-field-required">*</span></label>

                                                <div>
                                                    <input id="email_a" type="email" class="login-field" name="email_a"
                                                           value="{{ old('email_a') }}"
                                                           required maxlength="40">
                                                </div>
                                            </div>

                                            <div class="login-field-container {{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password">Heslo: <span class="login-field-required">*</span></label>

                                                <div>
                                                    <input id="password" type="password" class="login-field"
                                                           name="password"
                                                           required maxlength="40">
                                                </div>
                                            </div>

                                            <div class="login-field-container">
                                                <label for="password-confirm">Potvrdiť heslo: <span
                                                            class="login-field-required">*</span></label>
                                                <div>
                                                    <input id="password-confirm" type="password" class="login-field"
                                                           name="password_confirmation" required maxlength="40">
                                                </div>
                                            </div>
                                            <div class="login-error">
                                                @if ($errors->has('name'))
                                                    <span><strong>{{ $errors->first('name') }}</strong></span>
                                                @endif
                                                @if ($errors->has('email'))
                                                    <span><strong>{{ $errors->first('email') }}</strong></span>
                                                @endif
                                                @if ($errors->has('email_a'))
                                                    <span><strong>{{ $errors->first('email_a') }}</strong></span>
                                                @endif
                                                @if ($errors->has('password'))
                                                    <span><strong>{{ $errors->first('password') }}</strong></span>
                                                @endif
                                            </div>
                                            <div>
                                                <input type="checkbox" id="podmienky-agree" name="podmienky"
                                                       required>
                                                <label for="podmienky-agree">Súhlasím s podmienkami používania
                                                    <span class="login-field-required">*</span></label>
                                            </div>
                                            <div><span class="login-field-required">*</span> Takto označené pole je
                                                povinné.
                                            </div>
                                            <div class="button-wrapper">
                                                <button type="submit" class="register-button">
                                                    Registrovať
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/load-locations.js') }}"></script>
    <script>$(document).ready(function () {
            loadLocation();
        })</script>
@endsection
