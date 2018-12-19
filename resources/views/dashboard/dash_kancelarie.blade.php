@extends('layouts.dashboard_layout')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent

@endsection
@section('title', 'Správa realitných kancelárií')
@section('content')
    @parent
    <a href="/admin-tools/pridat-kancelariu">
        <button class="dash-round-button"><i class="fas fa-plus" style="font-size: 30px;"></i></button>
    </a>
    <div class="dash-table-container">
        <div class="table-faker">
            <div class="table-row">
                <div class="table-cell table-head"></div>
                <div class="table-cell table-head">Meno</div>
                <div class="table-cell table-head">Konatel</div>
                <div class="table-cell table-head">Email</div>
                <div class="table-cell table-head">Telefón 1</div>
                <div class="table-cell table-head">Telefón 2</div>
                <div class="table-cell table-head">IČO</div>
                <div class="table-cell table-head">DIČ</div>
                <div class="table-cell table-head">Mesto</div>
                <div class="table-cell table-head">Ulica</div>
                <div class="table-cell table-head">Pridaný</div>
                <div class="table-cell table-head">Upravený</div>
            </div>
            @foreach($agencies as $agency)
                <div class="table-row">
                    <div class="table-cell">
                        <div style="width: max-content;">
                            <a href='/admin-tools/showEstatesOfAgency/{{ $agency->UUID }}' ><span><i class="far fa-eye table-awesome"></i></span></a> <!-- TODO: po kliknutí zobrazí iba inzeráty tejto kancelárie -->
                            <i class="fas fa-pencil-alt table-awesome"></i>
                            <a href='/admin-tools/deleteAgency/{{ $agency->UUID }}' class="delete-element"><span><i class="fas fa-trash table-awesome"></i></span></a>

                        </div>
                    </div>
                    <div class="table-cell">{{$agency->name}}</div>
                    <div class="table-cell">{{$agency->director}}</div>
                    <div class="table-cell">{{$agency->email}}</div>
                    <div class="table-cell">{{$agency->phone}}</div>
                    <div class="table-cell">{{$agency->phone2}}</div>
                    <div class="table-cell">{{$agency->ICO}}</div>
                    <div class="table-cell">{{$agency->DIC}}</div>
                    <div class="table-cell">{{$agency->village_id}}</div> <!-- TODO: mesto namiesto ID -->
                    <div class="table-cell">{{$agency->address}}</div>
                    <div class="table-cell">{{$agency->created_at}}</div>
                    <div class="table-cell">{{$agency->edited_at}}</div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('js/remove-check.js') }}"> </script>
@endsection