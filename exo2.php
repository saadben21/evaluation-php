<?php
 $n=3;
 $fact = 1;
 for ($i = 1; $i <= $n; $i++) {
     $fact = $fact * $i;
 }
 echo "Le résultat est : " . $fact;
?>
<?php echo '<br>'?>
<?php echo 'boucle while:'?>
<?php echo '<br>'?>
<?php
 $n=3;
 $fact = 1;
 while ($n > 0) {
     $fact = $fact * $n;
     $n--;
 }
 echo "Le résultat est : " . $fact;
?>
