<?php 


function cardsData( $cardsdata){
        foreach ( $cardsdata as $card) {
        echo '<div class="card container"> 
        <img class="card-img" src="'.$card['image'].'" alt="card image">
            <div class="card-info">
            <div class="card-details">    
            <h2>'.$card['name'].'</h2>
                <p>'.$card['dollar'].'</p>
                </div>
                <div class="qr-code">
                    <img src="'.$card['qrcode'].'" alt="QR code">
                </div>
                </div>
        </div>';
        }

}
