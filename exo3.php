<?php
$mois = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
);
foreach ($mois as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>
<?php echo '<br>'?>

<table>
    <tr>
        <td>Janvier</td>
        <td>Février</td>
        <td>Mars</td>
        <td>Avril</td>
        <td>Mai</td>
        <td>Juin</td>
        <td>Juillet</td>
        <td>Août</td>
        <td>Septembre</td>
        <td>Octobre</td>
        <td>Novembre</td>
        <td>Décembre</td>
    </tr>
    <tr>
        <?php
        foreach ($mois as $key => $value) {
            echo "<td>" . $value . "</td>";
        }
        ?>
    </tr>
