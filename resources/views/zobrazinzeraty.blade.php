<?php
/**
 * Created by PhpStorm.
 * User: Miroslav
 * Date: 20.11.2018
 * Time: 16:11
 */?>
<table>
    @foreach($inzeraty as $item)
        <tr>
            <td>
                {{$item->nadpis}}
            </td>
            <td>
                {{$item -> ulica}}
            </td>
            <td>
                {{$item -> plocha}}
            </td>
            <td>
                {{$item -> cena}}
            </td>
            <td>
                {{$item -> pocet_izieb}}
            </td>
            <td>
                {{$item -> poschodie}}
            </td>
            <td>
                <a href="{{action("AdminController@zobrazInzerat",['id' => $item-> id])}}"> Editovať</a>
                <a href="{{action("AdminController@vymazInzerat",['id' => $item-> id])}}"> Vymazať</a>

            </td>
        </tr>
    @endforeach

</table>
