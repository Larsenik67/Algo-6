<?php 

function convertirMajRouge($texte){
    $texte = strtoupper($texte);
    return "<span style='color:red'>$texte</span> ";
};

$texte = "Mon texte en parametre";

echo convertirMajRouge($texte);

?>