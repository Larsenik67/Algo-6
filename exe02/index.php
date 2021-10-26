
<?php 

$capitales = ["france"=>"paris", "allemagne"=>"berlin", "usa"=>"washington", "italie"=>"rome"];

function afficherTableHTML($capitales){

    $resultat = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet"><title>exe2</title></head><body><table><thead><tr><td>Pays</td><td>Capitale</td></tr></thead><tbody>';

    array_multisort($capitales);

    forEach($capitales as $pays => $capitale){
        
        $pays = strtoupper($pays);
        $capitale = ucfirst($capitale);
        $resultat .= "<tr><td>$pays</td><td>$capitale</td></tr>";

    }

    $resultat .= "</tbody></table></body></html>";

    return $resultat;

};

echo afficherTableHTML($capitales);

?>

