@extends('layouts.dashboard_layout')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent
@endsection
@section('title', 'Upraviť inzerát')
@section('content')
    @parent
    <form action="{{URL::to('/estate-cms/addEstate')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="uuid" value="{{$inzerat->UUID}}">
        <div class="dash-flex">
            <div>
                <h3>Informácie o nehnuteľnosti</h3>
                <div class="dash-input-group-wrapper">
                    <div class="dash-input-container">
                        <label for="ponuka">Ponuka: <span class="dash-field-required">*</span></label>
                        <select class="dash-input" id="ponuka" name="ponuka" required class="login-field">
                            <option @if ($inzerat->issale==1) selected @endif value="1">Predaj</option>
                            <option @if ($inzerat->issale==0) selected @endif value="2">Prenájom</option>
                        </select>
                    </div>
                    <div class="dash-input-container">
                        <label for="cena">Cena: <span class="dash-field-required">*</span></label>
                        <input id="cena" class="dash-input" min="0" max="999999999" type="number"
                               name="cena" required value="{{ $inzerat->price }}">
                    </div>

                    <div class="dash-input-container">
                        <label for="typ">Typ nehnuteľnosti: <span class="dash-field-required">*</span></label>
                        <select id="typ" class="dash-input" name="typ_nehnutelnosti" required>
                            <option value="1"  @if ($inzerat->type=='Garsónka') selected @endif>Garsónka</option>
                            <option value="2"  @if ($inzerat->type=='Byt') selected @endif>Byt</option>
                            <option value="3"  @if ($inzerat->type=='Rodinný dom') selected @endif>Rodinný dom</option>
                            <option value="4"  @if ($inzerat->type=='Nebytový priestor') selected @endif>Nebytový priestor</option>
                            <option value="5"  @if ($inzerat->type=='Pozemok') selected @endif>Pozemok</option>
                            <option value="6"  @if ($inzerat->type=='Iné') selected @endif>Iné</option>
                        </select>
                    </div>
                    <div class="dash-input-container">
                        <label for="plocha">Plocha (m<sup>2</sup>): <span class="dash-field-required">*</span></label>
                        <input id="plocha" class="dash-input" type="number" min="1" name="plocha" max="999999" required value="{{ $inzerat->area }}">
                    </div>
                    <div class="dash-input-container">

                        <label for="pocet_izieb">Počet izieb:
                            <span id="izby" class="dash-field-required">*</span>
                        </label>
                        <input id="pocet_izieb" class="dash-input" type="number" min="0" max="999" name="pocet_izieb" disabled
                               required
                               value="{{ $inzerat->room_number }}">

                    </div>
                    <div class="dash-input-container">
                        <label for="poschodie">Poschodie: </label>
                        <input id="poschodie" class="dash-input" type="number" min="0" max="999" name="poschodie" value="{{ $inzerat->floors }}">
                    </div>
                    <div class="dash-input-container">
                        <span id="h_kraj" hidden>{{$inzerat->region}}</span>
                        <label for="kraj">Kraj: <span class="dash-field-required">*</span></label>

                            <span id="h_kraj" hidden>{{$inzerat->region}}</span>
                            <select id="kraj" class="dash-input" type="" name="kraj"
                                    value="{{ old('kraj') }}" required autofocus>
                            </select>

                    </div>
                    <div class="dash-input-container">
                        <span id="h_okres" hidden>{{$inzerat->district}}</span>
                        <label for="okres">Okres: <span
                                    class="dash-field-required">*</span></label>

                            <span id="h_okres" hidden>{{$inzerat->district}}</span>
                            <select id="okres" class="dash-input" type="" name="okres"
                                    value="{{ old('okres') }}" required autofocus>
                            </select>

                    </div>

                    <div class="dash-input-container">
                        <label for="city">Mesto: <span class="dash-field-required">*</span></label>
                        <span id="h_mesto" hidden>{{$inzerat->village}}</span>
                            <span id="h_mesto" hidden>{{$inzerat->village}}</span>
                            <select id="city" class="dash-input" type="" name="city"
                                    value="{{ old('city') }}" required autofocus>
                            </select>

                    </div>
                    <div class="dash-input-container">

                        <label for="street">Ulica:</label>
                        <input id="street" class="dash-input" type="text" name="street" value="{{ $inzerat->street }}"
                               autofocus>
                    </div>
                    <div class="dash-input-container">
                        <label for="obrazok">Fotografie:</label>
                        <input id="obrazok" type="file" name="obrazok[]" multiple>
                    </div>
                </div>
            </div>
            <div style="width: 100%;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <h3>Napíšte nám niečo viac</h3>
                <label for="popis" class="dash-desc-label">Popis: <span class="dash-field-required">*</span></label>
                <textarea class="dash-desc" id="popis" rows="3" type="text" name="popis" required >{{ $inzerat->description }}</textarea>
                <br>
                <div class="dash-button-wrapper">
                    <span class="dash-field-required">*</span> Takto označené pole je
                    povinné.
                    <br>
                    <button class="register-button" type="submit" name="add">Uložiť
                        inzerát
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/room-lock.js') }}"></script>
    <script src="{{ asset('js/fill-location.js') }}"></script>
    <script src="{{ asset('js/change-location.js') }}"></script>
    <script>$(window).on("load", function () {
            fillLocation();
        });</script>
@endsection