<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 12.11.2018
 * Time: 14:57
 */?>
<form method="post" action="{{action('AdminController@upravAdmina', ['id'=> $admin -> id])}}">
    Meno:<br>
    <input type="text" name="meno" value="{{$admin -> meno}}">
    <br>
    Priezvisko:<br>
    <input type="text" name="priezvisko" value="{{$admin -> priezvisko}}">
    <br>
    Email:<br>
    <input type="text" name="email" value="{{$admin -> mail}}">
    <br>

    IBAN:<br>
    <input type="text" name="IBAN" value="{{$admin -> IBAN}}">
    <br>
    Mesto:<br>
    <input type="text" name="mesto" value="{{$admin -> mesto}}">
    <br>
    Adresa:<br>
    <input type="text" name="adresa" value="{{$admin -> adresa}}">
    <br>
    Telefon:<br>
    <input type="text" name="telefon" value="{{$admin -> telefon}}">
    <br>
    Telefon2:<br>
    <input type="text" name="telefon2" value="{{$admin -> telefon2}}">
    <br>
    Opravnenie:<br>
    <input type="text" name="opravnenie" value="{{$admin -> opravnenie}}">
    <br>
    Heslo:<br>
    <input type="text" name="heslo" value="{{$admin -> heslo}}">
    <br>
    <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Upraviť">




</form>