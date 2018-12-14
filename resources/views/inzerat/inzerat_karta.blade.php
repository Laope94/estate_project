<div class="card-container">
    <div class="card-image-container">
        @php
            $images_list = array();
            $images_list = glob('images/foundation/'.$uuid.'/*');
            $images_count = count($images_list);
         @endphp
        @if($images_count>0)
            @php
            $image = $images_list[0];
            @endphp
            @else
            @php
            $image = 'images/no-photo.jpg'
            @endphp
            @endif
        <img class="card-image" src="{{asset($image)}}">

    </div>
    <div class="card-round-container">
        <div class="card-round-buttons">
            <div class="card-round-wrapper">
                <div class="card-round-button">
                    <i class="fas fa-building card-awesome"></i>
                </div>
                <span>@php if($typ=='Byt'||$typ=='Dom' ){echo $izby.'-izbový '.$typ; }else{echo $typ;} @endphp</span></div>
            <div class="card-round-wrapper">
                <div class="card-round-button">
                    <i class="fas fa-ruler card-awesome"></i>
                </div>
                <span>{{$rozloha}} m<sup>2</sup></span></div>
            <div class="card-round-wrapper">
                <div class="card-round-button">
                    <i class="fas fa-map-marked-alt card-awesome"></i>
                </div>
                <span>{{$lokalita}}</span></div>
        </div>
    </div>
    <div class="card-price-tag">
        <i class="fas fa-hand-holding-usd card-awesome"></i><span class="card-price">@php   if($predaj==1){echo $cena , ' € ';}else{echo $cena, ' € / mesiac' ;} @endphp</span>
    </div>
    <form class="" action="{{ action('InzeratController@estateDetail', ['UUID' => $uuid]) }}" method="get">
        <div class="card-button-container">
            <button class="card-button">Zobraziť inzerát</button>
        </div>
        </form>
</div>
