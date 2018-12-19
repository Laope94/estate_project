@extends('layouts.master_layout')
@section('title', 'Pridať inzerát')
@section('menu')
    @parent
    <div class="content-container">
        <div class="overlay">
            <div class="login-register-container">
                <div class="flex-container">
                    <div class="register-card">
                        <form action="{{URL::to('/pridajInzerat')}}" method="post" enctype="multipart/form-data">
                            <h2 class="register-title">Inzerát</h2>
                            <div>
                                <div class="register-inner-flex">
                                    <div class="register-half">
                                        @if (!Auth::check())
                                            <div>
                                                <h3 class="login-title">Informácie o Vás</h3>
                                                <div class="register-small-flex">
                                                    <div class="login-field-container">
                                                        <label for="name">Meno: <span
                                                                    class="login-field-required">*</span></label>
                                                        <div>
                                                            <input id="name" type="text" class="login-field" name="name"
                                                                   value="{{old('name')}}" required autofocus maxlength="40">
                                                        </div>
                                                    </div>
                                                    <div class="login-field-container">
                                                        <label for="surname">Priezvisko: <span
                                                                    class="login-field-required">*</span></label>
                                                        <div>
                                                            <input id="surname" type="text" class="login-field" name="surname"
                                                                   value="{{old('surname')}}" required autofocus maxlength="40">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="register-small-flex">
                                                    <div class="login-field-container">
                                                        <label for="email">Email: <span
                                                                    class="login-field-required">*</span></label>
                                                        <div>
                                                            <input id="email" type="email" class="login-field" name="email"
                                                                   value="{{old('email')}}" required autofocus maxlength="40">
                                                        </div>
                                                    </div>
                                                    <div class="login-field-container">
                                                        <label for="phone">Telefón: <span
                                                                    class="login-field-required">*</span></label>
                                                        <div>
                                                            <input id="phone" type="tel"  pattern="[0-9]{9,12}" class="login-field" name="phone"
                                                                   value="{{old('phone')}}" required autofocus >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div>
                                            <h3 class="login-title">Informácie o nehnuteľnosti</h3>
                                            <div class="register-small-flex">
                                                <div class="login-field-container">
                                                    <label for="ponuka">Ponuka: <span
                                                                class="login-field-required">*</span></label>
                                                    <div>
                                                        <select id="ponuka" name="ponuka" required class="login-field">
                                                            <option disabled selected value>
                                                                ----------------------------------
                                                            </option>
                                                            <option value="0">Prenájom</option>
                                                            <option value="1">Predaj</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="cena">Cena: <span class="login-field-required">*</span></label>
                                                    <div>
                                                        <input id="cena" class="login-field" min="0" max="999999999" type="number"
                                                               name="cena" required
                                                               value="">
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
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="plocha">Plocha (m2): <span class="login-field-required">*</span></label>
                                                    <div>
                                                        <input id="plocha" class="login-field" type="number" min="1" max="999999"
                                                               name="plocha" required
                                                               value="">
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
                                                               name="pocet_izieb" disabled required value="">
                                                    </div>
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="poschodie">Poschodie: </label>
                                                    <div>
                                                        <input id="poschodie" class="login-field" type="number"
                                                               name="poschodie"
                                                               value="" min="0" max="999">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="register-small-flex">
                                                <div class="login-field-container">
                                                    <label for="kraj">Kraj: <span class="login-field-required">*</span></label>
                                                    <div>
                                                        <select id="kraj" class="login-field" type="" name="kraj"
                                                                value="{{ old('kraj') }}" required autofocus>
                                                            <option disabled selected value>
                                                                ----------------------------------
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="okres">Okres: <span
                                                                class="login-field-required">*</span></label>
                                                    <div>
                                                        <select id="okres" class="login-field" type="" name="okres"
                                                                value="{{ old('okres') }}" required autofocus disabled>
                                                            <option disabled selected value>
                                                                ----------------------------------
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="register-small-flex">
                                                <div class="login-field-container">
                                                    <label for="city">Mesto: <span class="login-field-required">*</span></label>
                                                    <div>
                                                        <select id="city" class="login-field" type="" name="city"
                                                                value="{{ old('city') }}" required autofocus disabled>
                                                            <option disabled selected value>
                                                                ----------------------------------
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="login-field-container">
                                                    <label for="street">Ulica:</label>
                                                    <div>
                                                        <input id="street" type="text" class="login-field" name="street"
                                                               value="{{ old('street') }}" maxlength="40" autofocus>
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
                                                      value=""></textarea>
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
    <script src="{{ asset('js/load-locations.js') }}"></script>
    <script>$(document).ready(function () {
            loadLocation();
        })</script>
@endsection
