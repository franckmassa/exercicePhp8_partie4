<?php
//Déclaration des variables pour les trois nombres
$number1 = 10;
$number2 = 47;
$number3 = 10;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice8</title>
</head>
<body>
  <p>
    <?php
    //Déclaration de la fonction somme et retourne la valeur
    function sum($number1, $number2, $number3){
      return $number1 + $number2 + $number3;
    }
    //Affichage du réultat de l'addition
    echo sum($number1, $number2, $number3);
    ?>
  </p>
</body>
</html>
