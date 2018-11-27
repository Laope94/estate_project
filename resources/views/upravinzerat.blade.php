<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 20.11.2018
 * Time: 16:40
 */?>
<form method="post" action="{{action('AdminController@upravInzerat', ['id'=> $admin -> id])}}">
    Meno:<br>
    <input type="text" name="meno" value="{{$admin -> name}}">
    <br>
    Priezvisko:<br>
    <input type="text" name="priezvisko" value="{{$admin -> surname}}">
    <br>
    Email:<br>
    <input type="text" name="email" value="{{$admin -> email}}">
    <br>

    IBAN:<br>
    <input type="text" name="IBAN" value="{{$admin -> IBAN}}">
    <br>
    Mesto:<br>
    <input type="text" name="mesto" value="{{$admin -> city}}">
    <br>
    Adresa:<br>
    <input type="text" name="adresa" value="{{$admin -> address}}">
    <br>
    Telefon:<br>
    <input type="text" name="telefon" value="{{$admin -> phone}}">
    <br>
    Telefon2:<br>
    <input type="text" name="telefon2" value="{{$admin -> phone2}}">
    <br>
    Opravnenie:<br>
    <input type="text" name="opravnenie" value="{{$admin -> privilege}}">
    <br>
    Heslo:<br>
    <input type="text" name="heslo" value="{{$admin -> password}}">
    <br>
    <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Upraviť">




</form>