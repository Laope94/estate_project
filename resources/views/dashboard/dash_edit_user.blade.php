@extends('layouts.dashboard_layout')
@section('includes')
    @parent
@endsection
@section('menu')
    @parent
@endsection
@if(Auth::user()->privilege>=4)
    @section('title', 'Upraviť používateľa')
@else
    @section('title', 'Upraviť zamestnanca')
@endif
@section('content')
    @parent
    <form action="{{URL::to('/admin-tools/updateUser')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="uuid" value="{{$users->uuid}}">
        <div class="dash-flex">
            {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="dash-input-container">
                <label for="name">Meno: <span class="dash-field-required">*</span></label>
                <input id="name" class="dash-input" type="text" name="name"
                       value="{{$users->name}}" required autofocus maxlength="40">
            </div>
            <div class="dash-input-container">
                <label for="surname">Priezvisko: <span class="dash-field-required">*</span></label>
                <input id="surname" class="dash-input" type="text" name="surname"
                       value="{{$users->surname}}" required autofocus maxlength="40">
            </div>

            <div class="dash-input-container">
                <label for="privilege">Oprávnenia: <span class="dash-field-required">*</span></label>
                <select id="privilege" name="privilege" class="dash-input" required>
                    <option disabled selected value>----------------------------------</option>
                    <option @if ($users->privilege==1) selected  value="1">Používateľ</option>@endif
                    <option @if ($users->privilege==2) selected  value="2">Zamestnanec kancelárie</option>@endif
                    <option @if ($users->privilege==3) selected  value="3">Admin kancelárie</option>@endif
                    <option @if ($users->privilege==4) selected  value="4">Admin </option>@endif
                    <option @if ($users->privilege==5) selected  value="5">Superadmin</option>@endif
                    @if(Auth::user()->privilege>=4)
                        <option value="1">Používateľ</option>
                    @endif
                    @if(Auth::user()->privilege>=3)
                        <option value="2">Zamestanec kancelárie</option>
                        <option value="3">Administrátor kancelárie</option>
                    @endif
                    @if(Auth::user()->privilege==5)
                        <option value="4">Administrátor</option>
                        <option value="5">Superadministrátor</option>
                    @endif
                </select>
            </div>
            @if(Auth::user()->privilege>=4)
                <div class="dash-input-container">
                    <label for="agency">Kancelária: <span class="dash-field-required">*</span></label>
                    <select id="agency" name="agency" class="dash-input" required disabled >
                        @foreach($agencies as $agency)
                            <option id="agency-{{$agency->id}}" value="{{$agency->name}}">
                                @if($agency->name=="0") Bez kancelárie @else {{$agency->name}} @endif
                            </option>
                        @endforeach
                    </select>
                </div>
            @else
                <input type="hidden" id="agency" name="agency" value="{{$users->agency}}">
            @endif

            @if(Auth::user()->privilege>=4)
                <div class="dash-input-container">
                    <span id="h_kraj" hidden>{{$users->region}}</span>
                    <label for="kraj">Kraj: <span class="dash-field-required">*</span></label>

                    <span id="h_kraj" hidden>{{$users->region}}</span>
                    <select id="kraj" class="dash-input" type="" name="kraj"
                            value="{{ old('kraj') }}" required autofocus>
                    </select>

                </div>

                <div class="dash-input-container">
                    <span id="h_okres" hidden>{{$users->district}}</span>
                    <label for="okres">Okres: <span
                                class="dash-field-required">*</span></label>

                    <span id="h_okres" hidden>{{$users->district}}</span>
                    <select id="okres" class="dash-input" type="" name="okres"
                            value="{{ old('okres') }}" required autofocus>
                    </select>

                </div>

                <div class="dash-input-container">
                    <label for="city">Mesto: <span class="dash-field-required">*</span></label>
                    <span id="h_mesto" hidden>{{$users->village}}</span>
                    <span id="h_mesto" hidden>{{$users->village}}</span>
                    <select id="city" class="dash-input" type="" name="city"
                            value="{{ old('city') }}" required autofocus>
                    </select>

                </div>


                <div class="dash-input-container">
                    <label for="street">Ulica:</label>
                    <input id="street" class="dash-input" type="text" name="street"
                           value="{{$users->address}}" autofocus maxlength="40">
                </div>
            @endif
            <div class="dash-input-container">
                <label for="phone_prim">Telefón 1: <span class="dash-field-required">*</span></label>
                <input id="phone_prim" class="dash-input" type="text" pattern="[0-9]{9,12}" name="phone_prim"
                       value="{{$users->phone}}"
                       required autofocus>
            </div>

            <div class="dash-input-container">
                <label for="phone_sec">Telefón 2:</label>
                <input id="phone_sec" class="dash-input" type="tel" name="phone_sec"
                       value="{{$users->phone2}}" pattern="[0-9]{9,12}" autofocus>
            </div>

            <div class="dash-input-container">
                <label for="email">E-Mail: <span class="dash-field-required">*</span></label>
                <input id="email" class="dash-input" type="email" name="email"
                       value="{{$users->email}}"
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
                        Upraviť používateľa
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/room-lock.js') }}"></script>
    <script src="{{ asset('js/fill-location.js') }}"></script>
    <script src="{{ asset('js/change-location.js') }}"></script>
    <script src="{{ asset('js/agency-lock.js') }}"></script>
    <script>$(window).on("load", function () {
            fillLocation();
        });</script>

@endsection