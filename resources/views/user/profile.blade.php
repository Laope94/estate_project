@extends('layouts.master_layout')
@section('title', 'Profil')
@section('menu')
    @parent
    <div class="content-container">
        <div class="overlay">
            <div class="login-register-container">
                <div class="flex-container">
                    <div class="register-card">
                        <h2 class="register-title">Môj profil</h2>
                        <div class="register-inner-flex">
                            <div class="register-half">
                                <div>
                                    <h3 class="login-title">Moje údaje</h3>
                                    <div class="register-small-flex">
                                        <div class="user-details-container">
                                            <button id="edit-user" class="add-button" title="Upraviť údaje"><i class="fas fa-pencil-alt user-edit-awesome"></i> </button>
                                            <button id="stop-edit" class="add-button" title="Zrušiť úpravy" style="display: none;"><i class="fas fa-times"></i> </button>
                                                <form id="edit-user-form">
                                                <div class="profile-field-container">
                                                    <label class="profile-label" for="name">Meno: </label>
                                                    <input id="name" name="name" type="text" value="{{$user->name}}" disabled
                                                           required class="profile-field dis-field">
                                                </div>
                                                <div class="profile-field-container">
                                                    <label class="profile-label" for="surname">Priezvisko: </label>
                                                    <input id="surname" name="surname" type="text" value="{{$user->surname}}" disabled
                                                           required class="profile-field dis-field">
                                                </div>
                                                <div class="profile-field-container">
                                                    <label class="profile-label" for="phone_prim">Tel. č. 1:</label>
                                                    <input id="phone_prim" name="phone_prim" type="text"
                                                           pattern="[0-9]{9,}" value="{{$user->phone}}" disabled required
                                                           class="profile-field dis-field">
                                                </div>
                                                <div class="profile-field-container">
                                                    <label class="profile-label" for="phone_sec">Tel. č. 2:</label>
                                                    <input id="phone_sec" name="phone_sec" type="text"
                                                           pattern="[0-9]{9,}" value="{{$user->phone2}}" disabled
                                                           class="profile-field dis-field">
                                                </div>
                                                <div class="profile-field-container">
                                                    <label class="profile-label" for="kraj">Kraj: </label>
                                                    <select id="kraj" name="kraj" required autofocus
                                                            class="profile-field dis-field profile-dropdown" disabled>
                                                    </select>
                                                </div>
                                                <div class="profile-field-container">
                                                    <label class="profile-label" for="okres">Okres: </label>
                                                    <select id="okres" name="okres" required autofocus
                                                            class="profile-field dis-field profile-dropdown" disabled>
                                                    </select>
                                                </div>
                                                <div class="profile-field-container">
                                                    <label class="profile-label" for="city">Mesto: </label>
                                                    <select id="city" name="city" required autofocus
                                                            class="profile-field dis-field profile-dropdown" disabled>
                                                    </select>
                                                </div>
                                                <div class="profile-field-container">
                                                    <label class="profile-label" for="street">Ulica: </label>
                                                    <input id="street" name="street" type="text" value="{{$user->address}}"
                                                           disabled class="profile-field dis-field">
                                                </div>
                                                    <div class="button-wrapper">
                                                        <button type="submit" id="save-changes" class="register-button" title="Uložiť">
                                                            Uložiť zmeny
                                                        </button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="register-half">
                                <div>
                                        <h3 class="login-title">Moje inzeráty</h3>
                                    <div>
                                        <div class="add-button-container">
                                            <a href="/pridat-inzerat" title="Pridať inzerát">
                                                <button class="add-button"><i class="fas fa-plus"></i></button></a>
                                        </div>
                                    <div class="register-small-flex">

                                        <div>
                                            @include('inzerat.inzerat_peek')
                                            @include('inzerat.inzerat_peek')
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-custom.js') }}"></script>
@endsection