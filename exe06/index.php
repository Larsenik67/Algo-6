<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($elements){

    $resultat = '<select name="civilité" id="etat-civil">
    <option value="">Choisissez votre état civil : </option>';

    forEach($elements as $element){
        $resultat .= '<option value="'.$element.'">'.$element.'</option>';
    };

    $resultat .= '</select>';

    return $resultat;

};

echo alimenterListeDeroulante($elements);

?>