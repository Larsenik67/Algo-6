<?php

$formulaires = ["Nom", "Prénom", "Adresse", "Email", "Ville", "Sexe"];
$metiers = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

function afficherFormulaire($formulaires, $metiers){
    $resultat = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"><title>exe5</title></head><body><form action="/exe5" method="post">';

    forEach($formulaires as $formulaire){
        $resultat .= '<div><label for="'.$formulaire.'">'.$formulaire.'</label><input type="text" id="'.$formulaire.'" name="'.$formulaire.'"></div>';
    };

    $resultat .= '<select name="intitulé_formation" id="formation">
    <option value="">Intitulé de formation : </option>';

    forEach($metiers as $metier){
        $resultat .= '<option value="'.$metier.'">'.$metier.'</option>';
    };

    $resultat .= '</select><div class="btn"><input type="submit" value="Envoyez"></div></form></body></html>';

    return $resultat;

};

echo afficherFormulaire($formulaires, $metiers);

?>
