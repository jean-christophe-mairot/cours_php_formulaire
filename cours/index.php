<?php
$x = 1;
$y = 2;
$z = 3;
$a = 5;

$x = $z += 2 ; // retourne 5
echo $x;
echo '<br>';
var_dump($x !== '4');
echo '<br>';
echo $x <=> $y;
// l'operateur spaceship <=>
//Return 0 if values on either side are equal
//Return 1 if the value on the left is greater
//Return -1 if the value on the right is greater
echo '<br>';
echo $x ?? $y;

if ($x >1){
    echo '$x contient une valeur supérieur à 1 test';
}
echo '<br>';
if ($x == $y){
    echo'$x et $y contiennent la même valeur';
}

// imbriquer plusieurs positions 

$inscrit = true;
$age = 28 ;


if ($inscrit == true){
    if ($age >=18){
    echo 'vous êtes majeur';
    }else{
    echo 'vous êtes mineur';
    }
}else{
    echo 'l\'utilisateur non inscrit : accès refusé';
}


// utilisation des operateur avec les conditions

$x= 4 ;
$y= -12;

if ($x >= 0 && $x <= 5){
    echo '$x contient une valeur entre 0 et 5 <br>';
}
if ($x >=0 && $y>=0){
    echo '$x et $y ont des valeurs positive <br>';
}
if ($x >=0 || $y >=0){
    echo '$x ou $y ou les deux ont des valeurs positive <br>';
}
if ($x >= 0 XOR $y >=0){
    echo '$x ou $y contient une valeur positive mais pas les deux';
}

// ********************************un petit jeu******************
// faire un jet de dés nombre de réussite 3+
// nombre de touche pour le nombre de dés de dommage = dés depassant le 3+ 
// fait un jet en fonction du niv de l'adversaire
// nombre dégats à soustraire des point de vie
