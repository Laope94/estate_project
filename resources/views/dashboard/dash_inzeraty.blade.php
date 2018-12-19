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
    @if(Auth::user()->privilege<=3)
    <a href="/estate-cms/pridat-inzerat">
        <button class="dash-round-button"><i class="fas fa-plus" style="font-size: 30px;"></i></button>
    </a>
    @endif
    <div class="dash-table-container">
        <div class="table-faker">
            <div class="table-row">
                <div class="table-cell table-head"></div>
                <div class="table-cell table-head">Typ ponuky</div>
                <div class="table-cell table-head">Typ nehnuteľnosti</div>
                <div class="table-cell table-head">Cena</div>
                <div class="table-cell table-head">Rozloha</div>
                <div class="table-cell table-head">Počet izieb</div>
                <div class="table-cell table-head">Poschodie</div>
                <div class="table-cell table-head">Kraj</div>
                <div class="table-cell table-head">Okres</div>
                <div class="table-cell table-head">Mesto</div>
                <div class="table-cell table-head">Upravil</div>
                <div class="table-cell table-head">Dátum pridania</div>
                <div class="table-cell table-head">Dátum úpravy</div>
            </div>
            @foreach($estates as $estate)
                <div class="table-row">
                    <div class="table-cell">
                        <div style="width: max-content;">
                            @if(Auth::user()->privilege<=3)
                                <a href="/estate-cms/inzerat/{{$estate->UUID}}"><i class="far fa-eye table-awesome"></i></a>
                                <i class="fas fa-pencil-alt table-awesome"></i>
                                <a href="/estate-cms/deleteEstate/{{$estate->UUID}}" class="delete-element"><i class="fas fa-trash table-awesome"></i></a>

                            @else
                                <a href="/admin-tools/inzerat/{{$estate->UUID}}"><i class="far fa-eye table-awesome"></i></a>
                                <a href="/admin-tools/updateEstt/{{$estate->UUID}}"><i class="fas fa-pencil-alt table-awesome"></i></a>
                                <a href="/admin-tools/deleteEstate/{{$estate->UUID}}" class="delete-element"><i class="fas fa-trash table-awesome"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="table-cell">
                        @if($estate->issale==0)
                            Prenájom
                        @else
                            Predaj
                        @endif
                    </div>
                    <div class="table-cell">{{$estate->type}}</div>
                    <div class="table-cell">{{$estate->price}}</div>
                    <div class="table-cell">{{$estate->area}} m<sup>2</sup></div>
                    <div class="table-cell">{{$estate->room_number}}</div>
                    <div class="table-cell">{{$estate->floors}}</div>
                    <div class="table-cell">{{$estate->region}}</div>
                    <div class="table-cell">{{$estate->district}}</div>
                    <div class="table-cell">{{$estate->village}}</div>
                    <div class="table-cell">{{$estate->users_id}}</div>   <!-- TODO: namiesto ID meno usera -->
                    <div class="table-cell">{{$estate->created_at}}</div>
                    <div class="table-cell">{{$estate->updated_at}}</div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('js/remove-check.js') }}"> </script>
@endsection
