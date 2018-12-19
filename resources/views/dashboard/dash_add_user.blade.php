@extends('layouts.dashboard_layout')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent
@endsection
@if($user->privilege>=4)
    @section('title', 'Pridať užívateľa')
@else
    @section('title', 'Pridať zamestnanca')
@endif
@section('content')
    @parent
    @if(Auth::user()->privilege>3)<form action="{{URL::to('/admin-tools/addUser')}}" method="post" enctype="multipart/form-data" id="edit-form">
        @else<form action="{{URL::to('/estate-cms/addUser')}}" method="post" enctype="multipart/form-data">
          @endif  <div class="dash-flex">
            {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">


            <div class="dash-input-container">
                <label for="name">Meno: <span class="dash-field-required">*</span></label>
                <input id="name" class="dash-input" type="text" name="name"
                       value="{{ old('name') }}" required autofocus maxlength="40">
            </div>
            <div class="dash-input-container">
                <label for="surname">Priezvisko: <span class="dash-field-required">*</span></label>
                <input id="surname" class="dash-input" type="text" name="surname"
                       value="{{ old('surname') }}" required autofocus maxlength="40">
            </div>

            <div class="dash-input-container">
                <label for="privilege">Oprávnenia: <span class="dash-field-required">*</span></label>
                <select id="privilege" name="privilege" class="dash-input" required>
                    <option disabled selected value>----------------------------------</option>
                    @if($user->privilege>=4)
                        <option value="1">Používateľ</option>
                    @endif
                    @if($user->privilege>=3)
                        <option value="2">Zamestanec kancelárie</option>
                        <option value="3">Administrátor kancelárie</option>
                    @endif
                    @if($user->privilege==5)
                        <option value="4">Administrátor</option>
                        <option value="5">Superadministrátor</option>
                    @endif
                </select>
            </div>
            @if($user->privilege>=4)
                <div class="dash-input-container">
                    <label for="agency">Kancelária: <span class="dash-field-required">*</span></label>
                    <select id="agency" name="agency" class="dash-input" required disabled >
                        @foreach($agencies as $agency)
                            <option id="agency-{{$agency->id}}" value="{{$agency->id}}">
                                @if($agency->name=="0") Bez kancelárie @else {{$agency->name}} @endif
                            </option>
                        @endforeach
                    </select>
                </div>
                @else
                <input type="hidden" id="agency" name="agency" value="{{$user->agency_id}}">
            @endif

            @if($user->privilege>=4)
                <div class="dash-input-container">
                    <label for="kraj">Kraj: <span class="dash-field-required">*</span></label>
                    <select id="kraj" class="dash-input" name="kraj"
                            value="{{ old('kraj') }}" required autofocus>
                        <option disabled selected value>----------------------------------</option>
                    </select>
                </div>

                <div class="dash-input-container">
                    <label for="okres">Okres: <span class="dash-field-required">*</span></label>
                    <select id="okres" class="dash-input" type="" name="okres"
                            value="{{ old('okres') }}" required autofocus disabled>
                        <option disabled selected value>----------------------------------</option>
                    </select>
                </div>

                <div class="dash-input-container">
                    <label for="city">Mesto: <span class="dash-field-required">*</span></label>
                    <select id="city" class="dash-input" type="" name="city"
                            value="{{ old('city') }}" required autofocus disabled>
                        <option disabled selected value>----------------------------------</option>
                    </select>
                </div>


                <div class="dash-input-container">
                    <label for="street">Ulica:</label>
                    <input id="street" class="dash-input" type="text" name="street"
                           value="{{ old('street') }}" autofocus maxlength="40">
                </div>
            @endif
            <div class="dash-input-container">
                <label for="phone_prim">Telefón 1: <span class="dash-field-required">*</span></label>
                <input id="phone_prim" class="dash-input" type="text" pattern="[0-9]{9,12}" name="phone_prim"
                       value="{{ old('phone_prim') }}"
                       required autofocus>
            </div>

            <div class="dash-input-container">
                <label for="phone_sec">Telefón 2:</label>
                <input id="phone_sec" class="dash-input" type="tel" name="phone_sec"
                       value="{{ old('phone_sec') }}" pattern="[0-9]{9,12}" autofocus>
            </div>

            <div class="dash-input-container">
                <label for="email">E-Mail: <span class="dash-field-required">*</span></label>
                <input id="email" class="dash-input" type="email" name="email"
                       value="{{ old('email') }}"
                       required maxlength="40">
            </div>


        <!-- TODO: HESLO - neviem ako to spravíme, najlepšie by bolo tieto fieldy dať preč a heslo iba generovať a posielať mailom, ale nefunguje mail... -->
            <div class="dash-input-container">
                <label for="password">Heslo: <span class="dash-field-required">*</span></label>
                <input id="password" class="dash-input" type="password"
                       name="password"
                       required maxlength="40">
            </div>

            <div class="dash-input-container">
                <label for="password-confirm">Potvrdiť heslo: <span class="dash-field-required">*</span></label>
                <input id="password-confirm" class="dash-input" type="password" name="password_confirmation" required maxlength="40">
            </div>

            <div class="login-error">
                @if ($errors->has('name'))
                    <span><strong>{{ $errors->first('name') }}</strong></span>
                @endif
                @if ($errors->has('email'))
                    <span><strong>{{ $errors->first('email') }}</strong></span>
                @endif
                @if ($errors->has('password'))
                    <span><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>

            <div class="dash-button-wrapper">
                <div><span class="dash-field-required">*</span> Takto označené pole je povinné.</div>
                <div>
                    <button type="submit" class="register-button">
                        Pridať používateľa
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/load-locations.js') }}"></script>
    <script src="{{ asset('js/agency-lock.js') }}"></script>
    <script>$(document).ready(function () {
            loadLocation();
        })</script>

@endsection