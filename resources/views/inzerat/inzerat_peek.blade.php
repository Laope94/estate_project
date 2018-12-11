<div class="peek-card-container">
    <details>
        <summary class="register-small-flex peek-sum">
                <div class="peek-title peek-half">
                    @php
                        if(($issale)=== 1){$sale="Predaj";}else{$sale="Prenájom";}
                        if(($type)=== "Rodinný dom" || ($type) === "Byt" ){
                            echo $sale.': '.$room_number.'-izbový '.mb_strtolower($type).', '.$village;
                        }
                        else{
                            echo $sale.': '.mb_strtolower($type).', '.$area.'m2 '.', '.$village;
                        }
                    @endphp
                    </div>
                <div>
                    <div class="peek-half"></div>
                </div>
            </summary>
            <div class="peek-more-container">
            <div class="register-small-flex">
                <div class="peek-half">
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
                <div class="card-image-container">
                <img class="card-image" src="{{asset($image)}}">
                </div>
            </div>
            <div class="peek-half">
                <div class="peek-group">
                    <a href='/inzerat/{{ $inzerat->UUID }}' title="Zobraziť inzerát"><span><i class="far fa-eye peek-awesome"></i></span></a>
                    <a href='updateAdv/{{ $inzerat->UUID }}' title="Upraviť inzerát"> <i class="fas fa-pencil-alt peek peek-awesome"></i></a>
                        <a href='deletep/{{ $inzerat->UUID }}' title="Vymazať inzerát"><i class="fas fa-trash peek-awesome"></i></a>
                </div>
                <div class="peek-detail-container">
                    <span class="peek-label">Typ inzerátu:  {{$sale}} </span> <br>
                    <span class="peek-label">Typ nehnuteľnosti: {{$type}} </span> <br>
                    <span class="peek-label">Počet izieb:{{$room_number}}</span> <br>
                    <span class="peek-label">Kraj:@php  echo str_replace("kraj", "", $region);@endphp </span> <br>
                    <span class="peek-label">Okres: {{$district}}</span> <br>
                    <span class="peek-label">Mesto: {{$village}}</span> <br>
                    <span class="peek-label">Ulica: {{$street}}</span> <br>
                    <span class="peek-label">Cena: {{$price}}</span> <br>
                    <span class="peek-label">Pridaný: {{$created_at}}</span> <br>
                    <span class="peek-label">Naposledy upravený:{{$updated_at}} </span> <br>
                </div>
            </div>
        </div>
        </div>
        <hr>
    </details>
</div>