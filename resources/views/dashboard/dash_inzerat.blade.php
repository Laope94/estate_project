@extends('layouts.dashboard_layout')
@section('includes')
    @parent
    <link href="{{asset('simplelightbox/simplelightbox.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('menu')
    @parent
@endsection
@section('title', 'Detail inzerátu')
@section('content')
    @parent
    <div class="dash-button-group">
       <a href=""><button class="dash-round-button"><i class="fas fa-pencil-alt"></i></button></a>
        <a href='/admin-tools/deleteEstateDetail/{{ $inzerat->UUID }}'><button class="dash-round-button"><i class="fas fa-trash"></i></button></a>
    </div>
<div class="dash-flex">
    <div class="dash-detail-column">
    <h3>Základné informácie</h3>
   <strong>Cena: </strong> {{$inzerat->price}}€ @if($inzerat->issale==0)
        {{'/mesiac'}}
    @endif<br>

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
    <strong> Kraj:</strong> {{str_replace("kraj", "", $inzerat->region)}}<br>
    <strong>Okres:</strong> {{$inzerat ->district}}<br>
    <strong>Mesto:</strong> {{$inzerat ->village}} <br>
    <strong>Ulica:</strong> {{$inzerat ->street}}
    </div>
    <div class="dash-detail-column">
    <h3>Popis</h3>

    {{$inzerat ->description}}
    </div>
    <div class="dash-detail-column">
    <h3>Galéria</h3>
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
    <script type="text/javascript" src="{{asset('simplelightbox/simple-lightbox.min.js')}}">
    </script>
    <script src="{{ asset('js/load-gallery.js') }}"></script>
@endsection