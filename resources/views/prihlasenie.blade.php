@extends('layouts.master_layout')
@section('title', 'Prihlasit')
@section('menu')
    @parent
    <div class="content-container">

        <div class="overlay">
            <div class="flex-container">
                <div>
                    <form>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br><br><br>
                        @csrf
                        Prihlasovacie meno: <input type="text" placeholder="Prihlasovacie meno">
                        Heslo: <input type="password" placeholder="Heslo">
                        <input type="submit">
                    </form>
                </div>
                <div>
                    <div>
                        <a href="">
                            <button class="register-button">Súkromná osoba</button>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <button class="register-button">Realitná kancelária</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection