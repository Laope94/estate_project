@extends('layouts.master_layout')
@section('title', 'Registrácia')
@section('menu')
    @parent
    <div class="content-container">
        <div class="overlay">
            <div class="login-register-container">
                <div class="flex-container">
                    <div class="register-card">
                        <h2 class="register-title">Registrácia súkromnej osoby</h2>
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="register-inner-flex">
                                <div class="register-half">
                                    <div class="login-title">Informácie o Vás</div>
                                    <div class="register-small-flex">
                                        <div class="login-field-container {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name">Meno: <span class="login-field-required">*</span></label>
                                            <div>
                                                <input id="name" class="login-field" type="text" name="name"
                                                       value="{{ old('name') }}" required autofocus>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="surname">Priezvisko: <span class="login-field-required">*</span></label>
                                            <div>
                                                <input id="surname" class="login-field" type="text" name="surname"
                                                       value="{{ old('surname') }}" required autofocus>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="kraj">Kraj: <span class="login-field-required">*</span></label>
                                            <div>
                                                <select id="kraj" class="login-field" type="" name="kraj"
                                                        value="{{ old('kraj') }}" required autofocus>
                                                    <option disabled selected value>----------------------------------</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="okres">Okres: <span class="login-field-required">*</span></label>
                                            <div>
                                                <select id="okres" class="login-field" type="" name="okres"
                                                        value="{{ old('okres') }}" required autofocus disabled>
                                                    <option disabled selected value>----------------------------------</option>
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
                                                    <option disabled selected value>----------------------------------</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="street">Ulica:</label>
                                            <div>
                                                <input id="street" type="text" class="login-field" name="street"
                                                       value="{{ old('street') }}" autofocus>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="phone_prim">Telefón 1: <span class="login-field-required">*</span></label>
                                            <div>
                                                <input id="phone_prim" type="text" pattern="[0-9]{9,}" class="login-field" name="phone_prim"
                                                       value="{{ old('phone_prim') }}"
                                                       required autofocus>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="phone_sec">Telefón 2:</label>
                                            <div>
                                                <input id="phone_sec" type="tel" class="login-field" name="phone_sec"
                                                       value="{{ old('phone_sec') }}" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="register-half">

                                    <div class="login-title">Prihlasovacie údaje</div>
                                    <div class="register-small-flex">
                                        <div>
                                            <div>
                                                <div class="login-field-container {{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="email">E-Mail: <span class="login-field-required">*</span></label>

                                                    <div>
                                                        <input id="email" type="email" class="login-field" name="email"
                                                               value="{{ old('email') }}"
                                                               required>
                                                    </div>
                                                </div>

                                                <div class="login-field-container {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password">Heslo: <span class="login-field-required">*</span></label>

                                                    <div>
                                                        <input id="password" type="password" class="login-field"
                                                               name="password"
                                                               required>
                                                    </div>
                                                </div>

                                                <div class="login-field-container">
                                                    <label for="password-confirm">Potvrdiť heslo: <span class="login-field-required">*</span></label>
                                                    <div>
                                                        <input id="password-confirm" type="password" class="login-field"
                                                               name="password_confirmation" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="login-error">
                                                    @if ($errors->has('name'))
                                                        <span><strong>{{ $errors->first('name') }}</strong></span>
                                                    @endif
                                                    @if ($errors->has('email'))
                                                        <span><strong>{{ $errors->first('email') }}</strong></span>
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
                                                <div>
                                                    <input type="checkbox" id="vek-agree" name="vek" required>
                                                    <label for="vek-agree">Potvrdzujem, že mám viac ako 18 rokov
                                                        <span class="login-field-required">*</span></label>
                                                </div>
                                                <div><span class="login-field-required">*</span> Takto označené pole je povinné.</div>
                                                <div class="button-wrapper">
                                                    <button type="submit" class="register-button">
                                                        Registrovať
                                                    </button>
                                                </div>
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