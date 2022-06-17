 <?php
$_GET['command'] = 2;
if (isset($_GET['command'])) {
    $command = $_GET['command'];
   switch ($command) {
        case 1:
            echo "Bonne matinée";
            break;
        case 2:
            echo "Bon appétit";
            break;
        case 3:
            echo "Bon après-midi";
            break;
        default:
            echo "Bonne soirée";
            break;
    }
}
?>
