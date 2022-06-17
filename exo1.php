<?php
// recuprer l'heure dans une variable
$heure = date("H");
// afficher message suivant le moment de la journée
if ($heure < 12) {
    echo "Bonne matinée";
} elseif ($heure < 14) {
    echo "Bon appétit";
} elseif ($heure < 18) {
    echo "Bon après-midi";
} else {
    echo "Bonne soirée";
}
?>