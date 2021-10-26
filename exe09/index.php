<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function afficherRadio($elements){

    $resultat = '';

    forEach($elements as $element){
        $resultat .= '<div>
        <input type="radio" id="'.$element.'" name="civilité" value="'.$element.'">
        <label for="'.$element.'">'.$element.'</label>
      </div>';
    };

    return $resultat;

};

echo afficherRadio($elements);

?>