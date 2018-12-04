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
                                <strong>Ponuka:</strong> Predaj<br>
                                <strong>Typ nehnuteľnosti:</strong> Dom<br>
                                <strong>Počet izieb:</strong> 3<br>
                                <strong>Poschodie:</strong> 5<br>
                                <strong> Rozloha:</strong> 50m<sup>2</sup><br>
                                <strong> Kraj:</strong> Banská Bystrica<br>
                                <strong>Okres:</strong> Žiar nad Hronom <br>
                                <strong>Mesto:</strong> Ladomerská Vieska <br>
                                <strong>Ulica:</strong> U cigánov 4
                                <h3 class="login-title">Kontakt</h3>
                                <strong> Meno:</strong> John Doe <br>
                                <strong> Email:</strong> <a
                                        href="mailto:johndoe@dead.com?Subject=Inzerát%20Prenájom: byt, Bratislava"
                                        target="_top">johndoe@dead.com</a><br>
                                <strong> Telefón 1:</strong> <a href="tel:0907123456">0907123456</a><br>
                                <strong> Telefón 2:</strong> <a href="tel:0904456789">0904456789</a><br>
                                </div>
                            </div>
                            <div class="user-details-container">
                                <h3 class="login-title">Popis</h3>
                                <div class="more-container">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus efficitur est et
                                viverra condimentum. Quisque lacinia feugiat commodo. Proin rutrum consequat quam, ac
                                egestas augue porttitor non. Mauris tellus ligula, posuere dapibus ipsum id, iaculis
                                finibus lacus. Cras imperdiet, tortor in aliquet porttitor, erat sem maximus ante, ut
                                egestas lectus metus sed lectus. Integer pretium varius tellus, et laoreet ipsum maximus
                                sit amet. Etiam ac ultrices est.
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
    <script src="{{ asset('js/jquery-custom.js') }}"></script>
@endsection