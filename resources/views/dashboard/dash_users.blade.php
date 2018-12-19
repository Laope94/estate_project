@extends('layouts.dashboard_layout')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent

@endsection
@if(Auth::user()->privilege>=4)
@section('title', 'Správa užívatelov')
@else
    @section('title', 'Správa zamestnancov')
    @endif
@section('content')
    @parent
    @if(Auth::user()->privilege>=4)
        <a href="/admin-tools/add-user">
            <button class="dash-round-button"><i class="fas fa-plus" style="font-size: 30px;"></i></button>
        </a>
        @else
        <a href="/estate-cms/pridat-zamestnanca">
            <button class="dash-round-button"><i class="fas fa-plus" style="font-size: 30px;"></i></button>
        </a>
        @endif

    <div class="dash-table-container">
        <div class="table-faker">
            <div class="table-row">
                <div class="table-cell table-head"></div>
                <div class="table-cell table-head">Oprávnenie</div>
                <div class="table-cell table-head">Meno</div>
                <div class="table-cell table-head">Priezvisko</div>
                <div class="table-cell table-head">Email</div>
                <div class="table-cell table-head">Telefón 1</div>
                <div class="table-cell table-head">Telefón 2</div>
                <div class="table-cell table-head">Kraj</div>
                <div class="table-cell table-head">Okres</div>
                <div class="table-cell table-head">Mesto</div>
                <div class="table-cell table-head">Pridaný</div>
                <div class="table-cell table-head">Upravený</div>
            </div>
            @foreach($users as $user)
                <div class="table-row">
                    <div class="table-cell">
                        <div style="width: max-content;">

                            <a href='/admin-tools/showEstatesOfUser/{{ $user->uuid }}' title="Zobraziť inzeráty užívateľa"><span><i class="far fa-eye table-awesome"></i></span></a>
                            <!-- TODO: po kliknutí zobrazí iba inzeráty pridané týmto userom -->
                            <a href='/admin-tools/updateUsr/{{ $user->uuid }}' title="Upraviť užívateľa"><i class="fas fa-pencil-alt table-awesome"></i></a>
                            <a href='/admin-tools/deleteUser/{{ $user->uuid }}' title="Vymazať užívateľa" class="delete-element"><i class="fas fa-trash table-awesome"></i></a>

                        </div>
                    </div>
                    <div class="table-cell">@if($user->privilege==1) Používateľ
                        @elseif ($user->privilege==2) Zamestnanec kancelárie
                        @elseif ($user->privilege==3) Administrátor kancelárie
                        @elseif ($user->privilege==4) Administrátor
                        @elseif ($user->privilege==5) Superadministrátor
                        @endif</div>
                    <div class="table-cell">{{$user->name}}</div>
                    <div class="table-cell">{{$user->surname}}</div>
                    <div class="table-cell">{{$user->email}}</div>
                    <div class="table-cell">{{$user->phone}}</div>
                    <div class="table-cell">{{$user->phone2}}</div>
                    <div class="table-cell">{{$user->region}}</div>
                    <div class="table-cell">{{$user->district}}</div>
                    <div class="table-cell">{{$user->village}}</div>
                    <div class="table-cell">{{$user->created_at}}</div>
                    <div class="table-cell">{{$user->edited_at}}</div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('js/remove-check.js') }}"> </script>
@endsection
