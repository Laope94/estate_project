@extends('layouts.master_layout')
@section('title', 'Hľadať nehnuteľnosť')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent
    <div class="content-container">
        <div class="overlay">
            <div class="login-register-container">
                <div class="flex-container">
                    <div class="register-card">
                        <h2 class="register-title">Filter</h2>
                        <form action="{{URL::to('/inzeraty')}}" method="get" hidden>
                            <button id="real-button" type="submit">Reset</button>
                        </form>
                        <form class="" action="{{URL::to('/inzeraty')}}" method="get">
                            <div class="register-inner-flex">
                                <div>
                                    <div class="login-field-container">
                                        <label for="issale"><strong>Typ</strong></label><br>
                                        <div class="small-field">
                                            <input id="issale" type="checkbox" name="issale[]" value="0"> Prenájom
                                            <input id="issale" type="checkbox" name="issale[]" value="1"> Predaj
                                        </div>
                                    </div>
                                    <div class="login-field-container">
                                        <label for="type"><strong>Druh nehnuteľnosti</strong></label><br>
                                        <select id="type" class="small-field" name="type[]">
                                            <option name="type[]" value="All">----------</option>
                                            <option name="type[]" value="Garsónka">Garsónka</option>
                                            <option name="type[]" value="Byt">Byt</option>
                                            <option name="type[]" value="Rodinný dom">Rodinný dom</option>
                                            <option name="type[]" value="Nebytový priestor">Nebytový priestor</option>
                                            <option name="type[]" value="Pozemok">Pozemok</option>
                                            <option name="type[]" value="Iné">Iné</option>
                                        </select>
                                    </div>
                                    <div class="login-field-container">
                                        <label for="rooms"><strong>Počet izieb</strong></label><br>
                                        <input id="rooms" class="small-field" type="number" name="room_number"
                                               value="{{\Illuminate\Support\Facades\Input::get('room_number')}}" min="0">
                                    </div>
                                </div>
                                <div>
                                    <div class="login-field-container">
                                        <label for="kraj"><strong>Kraj</strong></label>
                                        <div>
                                            <select class="small-field" id="kraj" type="" name="kraj"
                                                    value="{{ old('kraj') }}" autofocus>
                                                <option disabled selected value>
                                                    ----------------------------------
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="login-field-container">
                                        <label for="okres"><strong>Okres</strong></label>
                                        <div>
                                            <select class="small-field" id="okres" type="" name="okres"
                                                    value="{{ old('okres') }}" autofocus disabled>
                                                <option disabled selected value>
                                                    ----------------------------------
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="login-field-container">
                                        <label for="city"><strong>Mesto</strong></label>
                                        <div>
                                            <select class="small-field" id="city" type="" name="city"
                                                    value="{{ old('city') }}" autofocus disabled>
                                                <option disabled selected value>
                                                    ----------------------------------
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="login-field-container">
                                        <strong>Cena</strong><br>
                                        <div class="register-small-flex">
                                            <div><span class="small-field-label">od: </span><input
                                                        class="small-field-range" type="number" name="min_price" min="0"
                                                        value="{{\Illuminate\Support\Facades\Input::get('min_price')}}">
                                            </div>
                                            <div><span class="small-field-label">do: </span><input
                                                        class="small-field-range" type="number" name="max_price" min="0"
                                                        value="{{\Illuminate\Support\Facades\Input::get('max_price')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="login-field-container">
                                        <strong>Rozloha (m<sup style="font-size: 10px">2</sup>)</strong><br>
                                        <div class="register-small-flex">
                                            <div><span class="small-field-label">od: </span><input
                                                        class="small-field-range" type="number" name="min_area" min="0"
                                                        value="{{\Illuminate\Support\Facades\Input::get('min_area')}}">
                                            </div>
                                            <div><span class="small-field-label">do: </span><input
                                                        class="small-field-range" type="number" name="max_area" min="0"
                                                        value="{{\Illuminate\Support\Facades\Input::get('max_area')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-button-container login-field-container">
                                        <button id="fake-button" type="button" class="add-button" title="Resetovať formulár">
                                            <i class="fas fa-broom user-edit-awesome"></i></button>
                                        <button class="add-button" type="submit" name="find" title="Hľadať"><i
                                                    class="fas fa-search user-edit-awesome"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="newest-container">
                            <h3 class="login-title">Nájdené inzeráty</h3>
                            <div class="flex-container">
                                @foreach($estates as $estate)
                                    <div class="newest-card">@include('inzerat/inzerat_karta', ['uuid'=>$estate->UUID,'typ'=>$estate->type,'cena'=>$estate->price,
                      'predaj'=>$estate->issale, 'lokalita'=>$estate->village, 'rozloha'=>$estate->area, 'izby'=>$estate->room_number, 'id'=>$estate->id])</div>
                                @endforeach
                                @if(count($estates)==0)
                                    <strong>Vybraným kritériam nevyhovuje žiadny inzerát.</strong>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/load-locations.js') }}"></script>
    <script src="{{ asset('js/fake-button.js') }}"></script>
@endsection
