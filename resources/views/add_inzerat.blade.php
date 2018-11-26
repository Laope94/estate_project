@extends('layouts.master_layout')
@section('title', 'Registrácia')
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

                                <div>
                                    <h3 class="login-title">Informácie o nehnuteľnosti</h3>
                                    <div class="register-small-flex">
                                    <div class="login-field-container">
                                        <label for="nadpis">Názov inzerátu: *</label>
                                        <div>
                                            <input id="nadpis" class="login-field" type="text" name="nadpis" value="">
                                        </div>
                                    </div>
                                    <div class="login-field-container">
                                        <label for="cena">Cena: *</label>
                                        <div>
                                            <input id="cena" class="login-field" min="0" type="number" name="cena" required
                                                   value="">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="register-small-flex">
                                    <div class="login-field-container">
                                        <label for="typ">Typ nehnuteľnosti: *</label>
                                        <div>
                                            <select id="typ" name="typ_nehnutelnosti" required class="login-field">
                                                <option>------------------------------</option>
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
                                        <label for="plocha">Plocha (m2): *</label>
                                        <div>
                                            <input id="plocha" class="login-field" type="number" min="1" name="plocha" required
                                                   value="">
                                        </div>
                                    </div>
                                    </div>

                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="pocet_izieb">Počet izieb: *</label>
                                            <div>
                                                <input id="pocet_izieb" class="login-field" type="number" min="0"
                                                       name="pocet_izieb" required value="">
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="poschodie">Poschodie: </label>
                                            <div>
                                                <input id="poschodie" class="login-field" type="number" name="poschodie"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="register-small-flex">
                                        <div class="login-field-container">
                                            <label for="okres">Okres: *</label>
                                            <div>
                                                <select id="okres" name="okres" required class="login-field">
                                                    <option>------------------------------</option>
                                                    <option value="1">Bánovce nad Bebravou</option>
                                                    <option value="2">Banská Bystrica</option>
                                                    <option value="3">Banská Štiavnica</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="login-field-container">
                                            <label for="ulica">Ulica: </label>
                                            <div>
                                                <input id="ulica" class="login-field" type="text" name="ulica" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="login-field-container">
                                        <label for="obrazok">Fotografie:</label>
                                        <div>
                                            <input class="advert-photo-upload" id="obrazok" type="file" name="obrazok[]" multiple>
                                        </div>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                                <div>
                                    <h3 class="login-title">Napíšte nám niečo viac</h3>
                                    <div class="login-field-container">
                                        <label for="popis">Popis: *</label>
                                        <div>
                                            <textarea class="advert-desc" id="popis" rows="3" type="text" name="popis" required
                                                      value=""></textarea>
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button type="submit" class="register-button" name="add">Uložiť inzerát</button>
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
@endsection