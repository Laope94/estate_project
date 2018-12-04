<div class="card-container">
    <div class="card-image-container">
        <img class="card-image" src="{{asset('/images/sample.jpg')}}">
    </div>
    <div class="card-round-container">
        <div class="card-round-buttons">
            <div class="card-round-wrapper">
                <div class="card-round-button">
                    <i class="fas fa-building card-awesome"></i>
                </div>
                <span>Garsónka</span></div>
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
        <i class="fas fa-hand-holding-usd card-awesome"></i><span class="card-price"><?php echo $cena?>€ / mesiac</span>
    </div>
    <a href="">
        <div class="card-button-container">
            <button class="card-button">Zobraziť inzerát</button>
        </div>
    </a>
</div>
