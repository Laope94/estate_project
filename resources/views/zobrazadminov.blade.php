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
                {{$item->name}} {{$item->surname}}
            </td>
            <td>
                {{$item -> email}}
            </td>
            <td>
                {{$item -> phone}}
            </td>
            <td>
                {{$item -> phone2}}
            </td>
            <td>
                {{$item -> IBAN}}
            </td>
            <td>
                {{$item -> city}}
            </td>
            <td>
                {{$item -> address}}
            </td>
            <td>
                {{$item -> privilege}}
            </td>
            <td>
                <a href="{{action("AdminController@zobrazAdmina",['id' => $item-> id])}}"> Editovať</a>
                <a href="{{action("AdminController@vymazAdmina",['id' => $item-> id])}}"> Vymazať</a>

            </td>
        </tr>
    @endforeach

</table>
<a href="{{action("AdminController@adminForm")}}"> Pridať nového</a>
