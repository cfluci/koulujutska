<?php 
if(!isset($_GET['toiminto'])) $toiminto = "Suksi kuusen";

    {
    else $toiminto = $_GET['toiminto'];
    }
        switch ($toiminto) {
        case 'poisto';
        echo "Poistetaan jotain";
        break;
        echo "Piiloitetaan jotain";
    default:
    echo "ei tehdä mitään";

}
