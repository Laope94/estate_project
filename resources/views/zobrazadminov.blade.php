<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 12.11.2018
 * Time: 15:08
 */?>
<table>
    @foreach($admini as $item)
        <tr>
            <td>
                {{$item->meno}} {{$item->priezvisko}}
            </td>
            <td>
                {{$item -> mail}}
            </td>
            <td>
                {{$item -> telefon}}
            </td>
            <td>
                {{$item -> telefon2}}
            </td>
            <td>
                {{$item -> IBAN}}
            </td>
            <td>
                {{$item -> mesto}}
            </td>
            <td>
                {{$item -> adresa}}
            </td>
            <td>
                {{$item -> opravnenie}}
            </td>
            <td>
                <a href="{{action("AdminController@zobrazAdmina",['id' => $item-> id])}}"> Editovať</a>
                <a href="{{action("AdminController@vymazAdmina",['id' => $item-> id])}}"> Vymazať</a>

            </td>
        </tr>
    @endforeach

</table>
<a href="{{action("AdminController@adminForm")}}"> Pridať nového</a>
