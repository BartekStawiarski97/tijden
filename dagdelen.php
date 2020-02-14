<?php
date_default_timezone_set("Europe/Amsterdam");
$timelive = date("h:i");
$time = date("H");
$month = date("l");

if( $time >= 6 && $time < 12 ){
$img = "morning.png";
$text = 'Goede Morgen! <br> Het is nu ';
} else if ( $time >= 12 && $time < 18 ){
   $img = 'afternoon.png';
   $text= 'Goede Middag! <br> Het is nu ';
} else if ( $time >= 18 && $time <= 23 ){
   $img = 'evening.png';
   $text = 'Goede Avond! <br> Het is nu ';
} else {
   $img = 'night.png';
   $text = 'Goede Nacht! <br> Het is nu ';
}
?>