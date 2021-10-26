<?php

$url = 'http://my.mobirise.com/data/userpic/764.jpg';

function repeterImage($url, $valeur){

    $resultat = '';

    for($i = 1; $i <= $valeur; $i++){
        $resultat .= '<img src='.$url.' alt="">';
    }

    return $resultat;
}

echo repeterImage($url, 4);

?>