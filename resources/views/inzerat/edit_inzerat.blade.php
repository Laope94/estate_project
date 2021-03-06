@extends('layouts.master_layout')
@section('title', 'Pridať inzerát')
@section('menu')
    @parent
    <div class="content-container">
        <div class="overlay">
            <div class="login-register-container">
                <div class="flex-container">
                    <div class="register-card">
                        <form action="{{ action('InzeratController@updateAdvProfile') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="uuid" value="{{$inzerat->UUID}}">
                            <h2 class="register-title">Inzerát</h2>
                            <div>
                                <div class="register-inner-flex">
                                    <div class="register-half">
                                        <div>
                                            <h3 class="login-title">Informácie o nehnuteľnosti</h3>
                                            <div class="register-small-flex">
                                                <div class="login-field-container">
                                                    <label for="ponuka">Ponuka: <span
                                                                class="login-field-required">*</span></label>
                                                    <div>
                                                        <select id="ponuka" name="ponuka" required class="login-field">
                                                                <option @if ($inzerat->issale==1) selected @endif value="1">Predaj</option>
                                                                <option @if ($inzerat->issale==0) selected @endif value="0">Prenájom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="cena">Cena: <span class="login-field-required">*</span></label>
                                                    <div>
                                                        <input id="cena" class="login-field" min="0" max="999999999" type="number"
                                                               name="cena" required
                                                               value="{{ $inzerat->price }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="register-small-flex">
                                                <div class="login-field-container">
                                                    <label for="typ">Typ nehnuteľnosti: <span
                                                                class="login-field-required">*</span></label>
                                                    <div>
                                                        <select id="typ" name="typ_nehnutelnosti" required
                                                                class="login-field">
                                                                <option value="1"  @if ($inzerat->type=='Garsónka') selected @endif>Garsónka</option>
                                                                <option value="2"  @if ($inzerat->type=='Byt') selected @endif>Byt</option>
                                                                <option value="3"  @if ($inzerat->type=='Rodinný dom') selected @endif>Rodinný dom</option>
                                                                <option value="4"  @if ($inzerat->type=='Nebytový priestor') selected @endif>Nebytový priestor</option>
                                                                <option value="5"  @if ($inzerat->type=='Pozemok') selected @endif>Pozemok</option>
                                                                <option value="6"  @if ($inzerat->type=='Iné') selected @endif>Iné</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="plocha">Plocha (m2): <span class="login-field-required">*</span></label>
                                                    <div>
                                                        <input id="plocha" class="login-field" type="number" min="1" max="999999"
                                                               name="plocha" required
                                                               value="{{ $inzerat->area }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="register-small-flex">
                                                <div class="login-field-container">
                                                    <label for="pocet_izieb">Počet izieb:
                                                        <span id="izby" class="login-field-required">*</span>
                                                    </label>
                                                    <div>
                                                        <input id="pocet_izieb" class="login-field" type="number"
                                                               min="0" max="999"
                                                               name="pocet_izieb"  value="{{ $inzerat->room_number }}">
                                                    </div>
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="poschodie">Poschodie: </label>
                                                    <div>
                                                        <input id="poschodie" class="login-field" type="number"
                                                               name="poschodie" min="0" max="999"
                                                               value="{{$inzerat->floors}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="register-small-flex">
                                                <div class="login-field-container">
                                                    <label for="kraj">Kraj: <span class="login-field-required">*</span></label>
                                                    <div>
                                                        <span id="h_kraj" hidden>{{$inzerat->region}}</span>
                                                        <select id="kraj" class="login-field" type="" name="kraj"
                                                                value="{{ old('kraj') }}" required autofocus>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="okres">Okres: <span
                                                                class="login-field-required">*</span></label>
                                                    <div>
                                                        <span id="h_okres" hidden>{{$inzerat->district}}</span>
                                                        <select id="okres" class="login-field" type="" name="okres"
                                                                value="{{ old('okres') }}" required autofocus>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="register-small-flex">
                                                <div class="login-field-container">
                                                    <label for="city">Mesto: <span class="login-field-required">*</span></label>
                                                    <div>
                                                        <span id="h_mesto" hidden>{{$inzerat->village}}</span>
                                                        <select id="city" class="login-field" type="" name="city"
                                                                value="{{ old('city') }}" required autofocus>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="street">Ulica:</label>
                                                    <div>
                                                        <input id="street" type="text" class="login-field" name="street"
                                                               value="{{ $inzerat->street }}" autofocus maxlength="40">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="login-field-container">
                                                <label for="obrazok">Fotografie:</label>
                                                <div>
                                                    <input class="advert-photo-upload" id="obrazok" type="file"
                                                           name="obrazok[]" multiple>
                                                </div>
                                            </div>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </div>
                                    </div>
                                    <div class="register-half">
                                        <div>
                                            <h3 class="login-title">Napíšte nám niečo viac</h3>
                                            <div class="login-field-container">
                                                <label for="popis">Popis: <span
                                                            class="login-field-required">*</span></label>
                                                <div>
                                            <textarea class="advert-desc" id="popis" rows="3" type="text" name="popis"
                                                      required maxlength="3000"
                                                    >{{ $inzerat->description }}</textarea>
                                                </div>
                                            </div>
                                            <div><span class="login-field-required">*</span> Takto označené pole je
                                                povinné.
                                            </div>
                                            <div class="button-wrapper">
                                                <button type="submit" class="register-button" name="add">Uložiť
                                                    inzerát
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/room-lock.js') }}"></script>
    <script src="{{ asset('js/fill-location.js') }}"></script>
    <script src="{{ asset('js/change-location.js') }}"></script>
    <script>$(window).on("load", function () {
            fillLocation();
        });</script>
@endsection
