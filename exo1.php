<?php
$heure = date("H");
$minute = date("i");
$seconde = date("s");
echo "<h1>L'heure actuelle est : " . $heure . ":" . $minute . ":" . $seconde . "</h1>";
if ($heure < 12) {
    echo "Bonne matinée";
} elseif ($heure < 14) {
    echo "Bon appétit";
} elseif ($heure < 18) {
    echo "Bon après-midi";
} else {
    echo "Bonne soirée";
}echo "Bonne soirée";
?>