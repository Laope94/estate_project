<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 12.11.2018
 * Time: 15:11
 */?>
<form method="post" action="{{('pridajAdmina')}}">
    Meno:<br>
    <input type="text" name="meno" value="meno">
    <br>
    Priezvisko:<br>
    <input type="text" name="priezvisko" value="priezvisko">
    <br>
    IBAN:<br>
    <input type="text" name="IBAN" value="IBAN">
    <br>
    Mesto:<br>
    <input type="text" name="mesto" value="napis to sem!!!">
    <br>
    Adresa:<br>
    <input type="text" name="adresa" value="napis to sem!!!">
    <br>
    Email:<br>
    <input type="text" name="mail" value="mail">
    <br>
    Heslo:<br>
    <input type="text" name="heslo" value="heslo">
    <br>
    Telefon:<br>
    <input type="text" name="telefon" value="napis to sem!!!">
    <br>
    Telefon2:<br>
    <input type="text" name="telefon2" value="napis to sem!!!">
    <br>
    Oprávnenie:<br>
    <input type="text" name="opravnenie" value="0">
    <br>
    Kancelaria:<br>
    <input type="text" name="kancelaria_id" value="">
    <br>
    <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Pridať">
</form>

<a href="{{action("AdminController@zobrazAdminov")}}"> Zobraziť všetkých</a>
