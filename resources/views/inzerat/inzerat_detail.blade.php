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
                                <strong>Ponuka:</strong> <?php  if(($inzerat->issale)==1){echo ' Predaj ';}else{echo ' Prenájom';} ?><br>
                                <strong>Typ nehnuteľnosti:</strong> <?php echo $inzerat ->type?><br>
                                <strong>Počet izieb:</strong> <?php echo $inzerat ->room_number?><br>
                                <strong>Poschodie:</strong> <?php echo $inzerat ->floors?><br>
                                <strong> Rozloha:</strong> <?php echo $inzerat ->area?><sup>2</sup><br>
                                <strong> Kraj:</strong> <?php echo $inzerat ->region?><br>
                                <strong>Okres:</strong> <?php echo $inzerat ->district?><br>
                                <strong>Mesto:</strong> <?php echo $inzerat ->village?> <br>
                                <strong>Ulica:</strong><?php echo $inzerat ->street?>
                                    @if(Auth::id()!=$pouzivatel->id)
                                    <h3 class="login-title">Kontakt</h3>
                                <strong> Meno:</strong> <?php echo $pouzivatel->name ?> <?php echo $pouzivatel->surname ?> <br>
                                <strong> Email:</strong> <a
                                        href="<?php echo 'mailto:'.$pouzivatel->email.'?Subject=Inzerát:%20'.strtolower($inzerat->type).', '.$inzerat->village ?>"
                                        target="_top"><?php echo $pouzivatel->email ?></a><br>
                                <strong> Telefón 1:</strong> <?php echo $pouzivatel->phone ?><a href="tel:0907123456"></a><br>
                                <strong> Telefón 2:</strong> <?php echo $pouzivatel->phone2 ?> <a href="tel:0904456789"></a><br>
                                        @else
                                        <h3 class="login-title">Inzerát je váš</h3>
                                    @endif

                                </div>

                            </div>
                            <div class="user-details-container">
                                <h3 class="login-title">Popis</h3>
                                <div class="more-container">
                                    <?php echo $inzerat ->description?>
                                </div>
                            </div>
                            <div class="user-details-container"><h3 class="login-title">Galéria</h3>
                                <div class="more-container">
                                <div class="gallery">
                                    <div class="gallery-container">
                                    <a href="{{asset('images/house.jpg')}}">
                                        <img class="card-image" src="{{asset('images/house.jpg')}}"><i class="fas fa-search-plus more-gallery"></i></a>
                                    </div>
                                    <a href="{{asset('images/house2.jpg')}}" class="no-display"></a>
                                </div>
                                <strong>2</strong> obrázkov v galérii
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