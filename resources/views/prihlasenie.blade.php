@extends('layouts.master_layout')
@section('title', 'Prihlasit')
@section('menu')
    @parent
    <div class="content-container">
        <div style="position: absolute; top: 0; height: 100%; width: 100%; background: rgba(255,255,255, 0.5); margin-bottom: 5px;  z-index: 0;">
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
            <div>
                <a href=""><button class="register-button">Súkromná osoba</button></a>
            </div>
            <br>
            <div>
                <a href=""><button class="register-button">Realitná kancelária</button></a>
            </div>
        </div>
    </div>
@endsection