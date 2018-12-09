<div class="peek-card-container">
    <details>
        <summary class="register-small-flex peek-sum">
                <div class="peek-title peek-half">
                    <?php
                    if(($issale)=== 1){$sale="Predaj";}else{$sale="Prenájom";}
                    if(($type)=== "Dom" || ($type) === "Byt" ){
                        echo $sale.': '.$room_number.'-izbový '.strtolower($type).', '.$village;
                    }
                    else{
                        echo $sale.': '.strtolower($type).', '.$area.'m2 '.', '.$village;
                    }?>
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
                    <a href='/inzerat/{{ $inzerat->id }}' title="Zobraziť inzerát"><span><i class="far fa-eye peek-awesome"></i></span></a>
                    <a href='updateAdv/{{ $inzerat->id }}' title="Upraviť inzerát"> <i class="fas fa-pencil-alt peek peek-awesome"></i></a>
                        <a href='deletep/{{ $inzerat->id }}' title="Vymazať inzerát"><i class="fas fa-trash peek-awesome"></i></a>
                </div>
                <div class="peek-detail-container">
                    <span class="peek-label">Typ inzerátu: </span><?php echo $sale?>  <br>
                    <span class="peek-label">Typ nehnuteľnosti: </span> <?php echo $type?> <br>
                    <span class="peek-label">Počet izieb: </span> <?php echo $room_number?><br>
                    <span class="peek-label">Kraj: </span> <?php echo str_replace("kraj", "", $region);?><br>
                    <span class="peek-label">Okres: </span><?php echo $district?> <br>
                    <span class="peek-label">Mesto: </span><?php echo $village?> <br>
                    <span class="peek-label">Ulica: </span> <?php echo $street?><br>
                    <span class="peek-label">Cena: </span><?php echo $price?> <br>
                    <span class="peek-label">Pridaný:</span> <?php echo $created_at?> <br>
                    <span class="peek-label">Naposledy upravený: </span> <?php echo $updated_at?><br>
                </div>
            </div>
        </div>
        </div>
        <hr>
    </details>
</div>