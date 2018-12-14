@extends('layouts.dashboard_layout')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent

@endsection
@section('title', 'Správa inzerátov')
@section('content')
    @parent
    <div class="table-faker">
        <div class="table-row">
            <div class="table-cell table-head"></div>
            <div class="table-cell table-head">Typ ponuky</div>
            <div class="table-cell table-head">Typ nehnuteľnosti</div>
            <div class="table-cell table-head">Cena</div>
            <div class="table-cell table-head">Kraj</div>
            <div class="table-cell table-head">Okres</div>
            <div class="table-cell table-head">Mesto</div>
            <div class="table-cell table-head">Rozloha</div>
            <div class="table-cell table-head">Počet izieb</div>
            <div class="table-cell table-head">Pridal</div>
            <div class="table-cell table-head">Dátum pridania</div>
            <div class="table-cell table-head">Dátum úpravy</div>
        </div>
        <div class="table-row">
            <div class="table-cell">
                <div style="width: max-content;">
                    <i class="far fa-eye table-awesome"></i>
                    <i class="fas fa-pencil-alt table-awesome"></i>
                    <i class="fas fa-trash table-awesome"></i>
                </div>
            </div>
            <div class="table-cell">Prenájom</div>
            <div class="table-cell">Garsónka</div>
            <div class="table-cell">500</div>
            <div class="table-cell">BB</div>
            <div class="table-cell">Žiar nad Hronom</div>
            <div class="table-cell">Ladomerská Vieska</div>
            <div class="table-cell">50 m<sup>2</sup></div>
            <div class="table-cell">-</div>
            <div class="table-cell">Jane Doe</div>
            <div class="table-cell">5.1.1998</div>
            <div class="table-cell">6.3.2018</div>
        </div>
        <div class="table-row">
            <div class="table-cell">
                <div style="width: max-content;">
                    <i class="far fa-eye table-awesome"></i>
                    <i class="fas fa-pencil-alt table-awesome"></i>
                    <i class="fas fa-trash table-awesome"></i>
                </div>
            </div>
            <div class="table-cell">Predaj</div>
            <div class="table-cell">Rodinný dom</div>
            <div class="table-cell">120000</div>
            <div class="table-cell">KE</div>
            <div class="table-cell">Sobrance</div>
            <div class="table-cell">Sobrance</div>
            <div class="table-cell">80 m<sup>2</sup></div>
            <div class="table-cell">5</div>
            <div class="table-cell">Imrich Horváth</div>
            <div class="table-cell">6.8.2015</div>
            <div class="table-cell">21.12.2018</div>

        </div>
    </div>
@endsection
