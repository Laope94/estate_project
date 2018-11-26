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
                                            <label for="name">Meno: *</label>
                                            <div>
                                                <input id="name" class="login-field" type="text" name="name"
                                                       value="{{ old('name') }}" required autofocus>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="surname">Priezvisko: *</label>
                                            <div>
                                                <input id="surname" class="login-field" type="text" name="surname"
                                                       value="{{ old('surname') }}" required autofocus>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="city">Mesto: *</label>
                                            <div>
                                                <input id="city" class="login-field" type="text" name="city"
                                                       value="{{ old('city') }}" required autofocus>
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
                                            <label for="phone_prim">Telefón 1: *</label>
                                            <div>
                                                <input id="phone_prim" type="text" class="login-field" name="phone_prim"
                                                       value="{{ old('phone_prim') }}"
                                                       required autofocus>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="phone_sec">Telefón 2:</label>
                                            <div>
                                                <input id="phone_sec" type="text" class="login-field" name="phone_sec"
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
                                                    <label for="email">E-Mail: *</label>

                                                    <div>
                                                        <input id="email" type="email" class="login-field" name="email"
                                                               value="{{ old('email') }}"
                                                               required>


                                                    </div>
                                                </div>

                                                <div class="login-field-container {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password">Heslo: *</label>

                                                    <div>
                                                        <input id="password" type="password" class="login-field"
                                                               name="password"
                                                               required>
                                                    </div>
                                                </div>

                                                <div class="login-field-container">
                                                    <label for="password-confirm">Potvrdiť heslo: *</label>
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
                                                        <span><strong>Tento email je už registrovaný.</strong></span>
                                                    @endif
                                                    @if ($errors->has('password'))
                                                        <span><strong>Heslá sa nezhodujú.</strong></span>
                                                    @endif
                                                </div>
                                                <div>
                                                    <input type="checkbox" id="podmienky-agree" name="podmienky"
                                                           required>
                                                    <label for="podmienky-agree">Súhlasím s podmienkami používania
                                                        *</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" id="vek-agree" name="vek" required>
                                                    <label for="vek-agree">Potvrdzujem, že mám viac ako 18 rokov
                                                        *</label>
                                                </div>
                                                <div style="text-align: center;">
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
@endsection