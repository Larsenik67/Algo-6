<?php

$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($nomsInput){
    $resultat = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet"><title>exe5</title></head><body><form action="/exe5" method="post">';
    forEach($nomsInput as $input){
        $resultat .= '<div><label for="'.$input.'">'.$input.'</label><input type="text" id="'.$input.'" name="'.$input.'"></div>';
    };

    $resultat .= "</form></body></html>";

    return $resultat;

};

echo afficherInput($nomsInput)

?>