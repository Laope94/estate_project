@extends('layouts.master_layout')
@section('title', 'Detail inzerátu')
@section('includes')
    @parent
    <link href="{{asset('simplelightbox/simplelightbox.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('menu')
    @parent
    <div class="content-container">
        <div class="overlay">
            <div class="login-register-container">
                <div class="flex-container">
                    <div class="register-card">
                        <h2 class="register-title">Detail inzerátu</h2>
                        <div class="register-inner-flex">
                            <div class="user-details-container">
                                <h3 class="login-title">Základné informácie</h3>
                                <div class="more-container">
                                    <div class="card-price-tag login-field-required">
                                        {{$inzerat->price}}€ @if($inzerat->issale==0)
                                            {{'/mesiac'}}
                                        @endif<br>
                                    </div>
                                    <strong>Ponuka:</strong>
                                    @if($inzerat->issale==1)
                                        {{'Predaj'}}
                                    @else
                                        {{'Prenájom'}}
                                    @endif
                                    <br>
                                    <strong>Typ nehnuteľnosti:</strong> {{$inzerat ->type}}<br>
                                    <strong>Počet izieb:</strong> {{$inzerat ->room_number}}<br>
                                    <strong>Poschodie:</strong> {{$inzerat ->floors}}<br>
                                    <strong> Rozloha:</strong> {{$inzerat ->area}} m<sup>2</sup><br>
                                    <strong> Kraj:</strong> {{$inzerat ->region}}<br>
                                    <strong>Okres:</strong> {{$inzerat ->district}}<br>
                                    <strong>Mesto:</strong> {{$inzerat ->village}} <br>
                                    <strong>Ulica:</strong> {{$inzerat ->street}}
                                    @if(Auth::id()!=$pouzivatel->id)
                                        <h3 class="login-title">Kontakt</h3>
                                        <strong> Meno:</strong> {{$pouzivatel->name.' '.$pouzivatel->surname }}<br>
                                        <strong> Email:</strong> <a
                                                href="{{'mailto:'.$pouzivatel->email.'?Subject=Inzerát:%20'.strtolower($inzerat->type).', '.$inzerat->village}}"
                                                target="_top">{{$pouzivatel->email}}</a><br>
                                        <strong> Telefón 1:</strong> {{$pouzivatel->phone}}<a
                                                href="tel:{{$pouzivatel->phone}}"></a><br>
                                        <strong> Telefón 2:</strong> {{$pouzivatel->phone2}} <a
                                                href="tel:{{$pouzivatel->phone2}}"></a><br>
                                    @else
                                        <h3 class="login-title">Inzerát je váš</h3>
                                    @endif

                                </div>

                            </div>
                            <div class="user-details-container">
                                <h3 class="login-title">Popis</h3>
                                <div class="more-container">
                                    {{$inzerat ->description}}
                                </div>
                            </div>
                            <div class="user-details-container"><h3 class="login-title">Galéria</h3>
                                <div class="more-container">
                                    <div class="gallery">
                                        <div class="gallery-container">
                                            @php
                                                $images_list = array();
                                                $images_list = glob('images/foundation/'.$inzerat->UUID.'/*');
                                                $images_count = count($images_list);
                                            @endphp
                                            @if($images_count>0)
                                                <a href="{{asset($images_list[0])}}">
                                                    <img class="card-image" src="{{asset($images_list[0])}}">
                                                    <i class="fas fa-search-plus more-gallery"></i>
                                                </a>
                                            @else
                                                <a href="{{asset('images/no-photo.jpg')}}">
                                                    <img class="card-image" src="{{asset('images/no-photo.jpg')}}">
                                                    <i class="fas fa-search-plus more-gallery"></i>
                                                </a>
                                            @endif

                                        </div>
                                        @if($images_count>1)
                                            @foreach(array_slice($images_list, 1) as $image)
                                                <a href="{{asset($image)}}" hidden></a>
                                            @endforeach
                                        @endif
                                    </div>
                                    <strong>{{$images_count}}</strong> obrázkov v galérii
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('simplelightbox/simple-lightbox.min.js')}}">
    </script>
    <script src="{{ asset('js/load-gallery.js') }}"></script>
@endsection