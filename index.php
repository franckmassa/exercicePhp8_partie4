<?php
//fonction calcul avec les parametre par défaut
  function calculate($number1 = 125, $number2 = 25, $number3 = 364){
    $result = $number1 + $number2 + $number3;
    return $result;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <p>

<?= calculate(10,10,10); //Affichage avec de nouvelles variables ?>
    </p>
  </body>
</html>
