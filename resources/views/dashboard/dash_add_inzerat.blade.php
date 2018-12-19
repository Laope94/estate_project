@extends('layouts.dashboard_layout')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent
@endsection
@section('title', 'Pridať inzerát')
@section('content')
    @parent
    <form method="post" enctype="multipart/form-data">
        <div class="dash-flex">
            <div>
                <h3>Informácie o nehnuteľnosti</h3>
                <div class="dash-input-group-wrapper">
                    <div class="dash-input-container">
                        <label for="ponuka">Ponuka: <span class="dash-field-required">*</span></label>
                        <select class="dash-input" id="ponuka" name="ponuka" required class="login-field">
                            <option disabled selected value>
                                ----------------------------------
                            </option>
                            <option value="0">Prenájom</option>
                            <option value="1">Predaj</option>
                        </select>
                    </div>
                    <div class="dash-input-container">
                        <label for="cena">Cena: <span class="dash-field-required">*</span></label>
                        <input id="cena" class="dash-input" min="0" max="999999999" type="number"
                               name="cena" required>
                    </div>

                    <div class="dash-input-container">
                        <label for="typ">Typ nehnuteľnosti: <span class="dash-field-required">*</span></label>
                        <select id="typ" class="dash-input" name="typ_nehnutelnosti" required>
                            <option disabled selected value>
                                ----------------------------------
                            </option>
                            <option value="1">Garsónka</option>
                            <option value="2">Byt</option>
                            <option value="3">Rodinný dom</option>
                            <option value="4">Nebytový priestor</option>
                            <option value="5">Pozemok</option>
                            <option value="6">Iné</option>
                        </select>
                    </div>
                    <div class="dash-input-container">
                        <label for="plocha">Plocha (m<sup>2</sup>): <span class="dash-field-required">*</span></label>
                        <input id="plocha" class="dash-input" type="number" min="1" name="plocha" max="999999" required value="">
                    </div>
                    <div class="dash-input-container">

                        <label for="pocet_izieb">Počet izieb:
                            <span id="izby" class="dash-field-required">*</span>
                        </label>
                        <input id="pocet_izieb" class="dash-input" type="number" min="0" max="999" name="pocet_izieb" disabled
                               required
                               value="">

                    </div>
                    <div class="dash-input-container">
                        <label for="poschodie">Poschodie: </label>
                        <input id="poschodie" class="dash-input" type="number" min="0" max="999" name="poschodie" value="">
                    </div>
                    <div class="dash-input-container">
                        <label for="kraj">Kraj: <span class="dash-field-required">*</span></label>
                        <select id="kraj" class="dash-input" type="" name="kraj" value="{{ old('kraj') }}" required
                                autofocus>
                            <option disabled selected value>
                                ----------------------------------
                            </option>
                        </select>
                    </div>
                    <div class="dash-input-container">

                        <label for="okres">Okres: <span class="dash-field-required">*</span></label>
                        <select id="okres" class="dash-input" type="" name="okres"
                                value="{{ old('okres') }}" required autofocus disabled>
                            <option disabled selected value>
                                ----------------------------------
                            </option>
                        </select>
                    </div>
                    <div class="dash-input-container">

                        <label for="city">Mesto: <span class="dash-field-required">*</span></label>
                        <select id="city" class="dash-input" type="" name="city"
                                value="{{ old('city') }}" required autofocus disabled>
                            <option disabled selected value>
                                ----------------------------------
                            </option>
                        </select>
                    </div>
                    <div class="dash-input-container">

                        <label for="street">Ulica:</label>
                        <input id="street" class="dash-input" type="text" name="street" value="{{ old('street') }}"
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
                <textarea class="dash-desc" id="popis" rows="3" type="text" name="popis" required value=""></textarea>
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
    <script src="{{ asset('js/load-locations.js') }}"></script>
    <script>$(document).ready(function () {
            loadLocation();
        })</script>
@endsection