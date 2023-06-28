<!-- Exercice 1 -->

<?php
$age = 16;

if ($age >=18) {
    echo "Vous êtes majeur";
} 
else {
    echo "Vous êtes mineur";
}
?>

<br>

<!-- Exercice 2 -->

<?php
$isEasy = true;

if ($isEasy) {
    echo "C'est facile!!";
} 
else {
    echo "C'est difficile !!!";
}
?>

<br>

<!-- Exercice 3 -->

<?php
$age = 37;
$gender = "Homme";

if ($gender == "Homme") {
if ($age >=18) {
    echo "Vous êtes un homme et vous êtes majeur";
} else {
    echo "Vous êtes un homme et vous êtes mineur";
}
} elseif ($gender == "Femme") {
    if ($age >=18) {
        echo "Vous êtes une femme et vous êtes majeur";
    } else {
        echo "Vous êtes une femme et vous êtes mineur";
    }
} else {
    echo "Genre non reconnu";
}
?>

<br>

<!-- Exercice 4 -->

<?php
$magnitude = 8;

$phrases = array(
    1 => "Micro-séisme impossible à ressentir.",
    2 => "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.",
    3 => "Ne cause pas de dégâts mais commence à pouvoir être légèrement ressenti.",
    4 => "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégâts.",
    5 => "Séisme capable d'engendrer des dégâts importants sur de vieux bâtiments ou bien des bâtiments présentant des défauts de construction. Peu de dégâts sur des bâtiments modernes.",
    6 => "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.",
    7 => "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.",
    8 => "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.",
    9 => "Séisme capable de tout détruire sur une très vaste zone."
);

$phrase = isset($phrases[$magnitude]) ? $phrases[$magnitude] : "Magnitude invalide.";
echo $phrase;
?>

<br>

<!-- Exercice 5 -->

<?php
  if ($gender != 'Homme') {
    echo 'C\'est une développeuse !!!';
  } else {
    echo 'C\'est un développeur !!!';
  }
?>
<br>

<!-- Exercice 6 -->

<?php
  if ($age >= 18) {
    echo 'Tu es majeur';
  } else {
    echo 'Tu n\'es pas majeur';
  }
?>
<br>

<!-- Exercice 7 -->

<?php
$isOk = false;
  if ($isOk == false) {
    echo 'c\'est pas bon !!!';
  } else {
    echo 'c\'est ok !!';
  }
?>
<br>

<!-- Exercice 8 -->

<?php
  if ($isOk) {
    echo 'c\'est ok !!';
  } else {
    echo 'c\'est pas bon !!!';
  }
?>
