<div class="card-container">
    <div class="card-image-container">

        <img class="card-image" src="{{asset('/images/'.$fotka.'.jpg')}}">

    </div>
    <div class="card-round-container">
        <div class="card-round-buttons">
            <div class="card-round-wrapper">
                <div class="card-round-button">
                    <i class="fas fa-building card-awesome"></i>
                </div>
                <span><?php  if($typ=='Byt'||$typ=='Dom' ){echo $izby.'-izbový '.$typ; }else{echo $typ;} ?></span></div>
            <div class="card-round-wrapper">
                <div class="card-round-button">
                    <i class="fas fa-ruler card-awesome"></i>
                </div>
                <span><?php echo $rozloha?> m<sup>2</sup></span></div>
            <div class="card-round-wrapper">
                <div class="card-round-button">
                    <i class="fas fa-map-marked-alt card-awesome"></i>
                </div>
                <span><?php echo $lokalita?></span></div>
        </div>
    </div>
    <div class="card-price-tag">
        <i class="fas fa-hand-holding-usd card-awesome"></i><span class="card-price"><?php  if($predaj==1){echo $cena , ' € ';}else{echo $cena, ' € / mesiac' ;} ?></span>
    </div>
    <a href=""><form class="" action="{{ action('InzeratController@estateDetail', ['id' => $id]) }}" method="get">
        <div class="card-button-container">
            <button class="card-button">Zobraziť inzerát</button>
        </div>
        </form>
    </a>
</div>
