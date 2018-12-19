@extends('layouts.master_layout')
@section('title', 'Prihlásenie')
@section('menu')
    @parent
    <div class="content-container">
        <div class="overlay">
            <div class="login-register-container">
                <div class="flex-container">
                    <div class="login-card">
                        <div class="login-title">Máte účet? Prihláste sa!</div>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="login-field-container">
                            <label for="email">E-Mail: </label>
                                <input id="email" type="email" class="login-field" name="email"
                                       value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>
                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="login-field-container">
                            <label for="password">Heslo:</label>
                                <input id="password" type="password" class="login-field" name="password" required>
                            </div>
                        </div>
                        <div >
                            <div class="login-error">
                                @if ($errors->has('email'))
                                    <span>
                                        <strong>Zadali ste zlý email alebo heslo</strong>
                                    </span>
                                @endif
                                    @if ($errors->has('password'))
                                        <span>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Zapamätať si ma
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <button type="submit" class="register-button">
                                    Prihlásiť
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="login-card">
                        <div class="login-title">Zvoľte si kategóriu, v ktorej sa chcete registrovať</div>
                        <div class="register-description">
                        Realitné kancelárie a všetky samostatne zárobkové osoby vyvíjajúce realitnú
                        činnosť (sprostredkovatelia), sa MUSIA registrovať ako "Realitná kancelária". V
                        opačnom prípade Vám môže byť odopreté právo inzercie na bytvdome.sk
                        </div>
                        <div>
                            <a href="/register">
                                <button class="register-button">Súkromná osoba</button>
                            </a>
                        </div>
                        <div>
                            <a href="/registracia-kancelarie">
                                <button class="register-button">Realitná kancelária</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
