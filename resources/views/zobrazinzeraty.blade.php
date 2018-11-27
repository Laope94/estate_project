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
                {{$item->title}}
            </td>
            <td>
                {{$item -> street}}
            </td>
            <td>
                {{$item -> area}}
            </td>
            <td>
                {{$item -> price}}
            </td>
            <td>
                {{$item -> room_number}}
            </td>
            <td>
                {{$item -> floors}}
            </td>
            <td>
                <a href="{{action("AdminController@zobrazInzerat",['id' => $item-> id])}}"> Editovať</a>
                <a href="{{action("AdminController@vymazInzerat",['id' => $item-> id])}}"> Vymazať</a>

            </td>
        </tr>
    @endforeach

</table>
