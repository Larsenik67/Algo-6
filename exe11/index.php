<?php


$date = "2018-02-23";

function formaterDateFr($date){

    setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
    return strftime("%A %e %B %Y", strtotime($date));

}

echo formaterDateFr($date);

?>