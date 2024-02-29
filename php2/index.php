<?php
$date_actuelle = date("Y-m-d");
$heure_actuelle = date("H");

echo "HELLO PHP, nous sommes le $date_actuelle ";

if ($heure_actuelle < 12) {
    echo "bon matin";
} else { 
    echo "bon après-midi";
}

?>