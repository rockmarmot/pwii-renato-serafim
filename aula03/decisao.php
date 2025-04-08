<?php
$x = 5;
$y = 8;
    if ($x > $y) {
        echo $x . 'é maior que' . $y;
     } else {
         echo $x . ' é monor que ' . $y;
     }


echo '<br>';


     $x = 5;
     $y = 5;
    if ($x > $y) {
        echo $x . 'é maior que' . $y;
     } else if ($x < $y){
         echo $x . ' é monor que ' . $y;
     } else if ($x = $y){
         echo $x . ' é igual a ' . $y;
     }
    
echo '<br>';

     echo 'médias:';

 echo '<br>';

     $x = 6;
     $y = 6;
    $média = ($x + $y) / 2;
    if ($média >= 6.0)
    {
        echo 'você foi aprovado';
    }
    else if ($média <= 4.0)
    {
        echo 'você foi reprovado';
    }
    else {
        echo 'você está de recuperação';
    }
?>