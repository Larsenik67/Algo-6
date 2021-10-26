<?php

$elements = ["Choix 1" => "0", "Choix 2" => "1", "Choix 3" => "0"];


function genererCheckbox($elements){

    $resultat = '';

    forEach($elements as $element => $valeur){
        if($valeur === "1"){
            $resultat .= '<div>
    <input type="checkbox" id="'.$element.'" name="'.$element.'"
           checked>
    <label for="'.$element.'">'.$element.'</label>
  </div>';
        } else {
            $resultat .= '<div>
    <input type="checkbox" id="'.$element.'" name="'.$element.'">
    <label for="'.$element.'">'.$element.'</label>
  </div>';
        };
    };

    return $resultat;
};

echo genererCheckbox($elements);
?>