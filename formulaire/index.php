<?php

$prenom="marc";
$nom="doe";
$note1=10;
$note2=20;
$moyenne=($note1+$note2)/2;

echo "Bonjour $prenom $nom vous avez eu $moyenne de moyenne";
// creation d'un tab
$notes =[10, 20, 15, 12, 8, 2];//tab de base
echo $notes[1];//affiche 20
//tab v2
$eleve=["Marc", "doe", [10, 20, 40]];//a la place d'un index on utilise des clefs
$eleves=[
    'nom'=> 'doe',
    'prenom'=> 'Marc',
    'notes'=> [10, 15, 20]
];

//ajouter une note
$eleves['notes'][3]=18;

echo "<br>";
echo $eleves['prenom'].' '. $eleves['nom'];
echo "<br>";
print_r($eleves['notes']);
echo "<br>";

$classe=[
    [
        'nom'=> 'doe',
        'prenom'=> 'jean',
        'notes'=>[16, 20, 18]
    ],
    [
        'nom'=> 'loop',
        'prenom'=> 'marc',
        'notes'=>[16, 20, 18]

    ]
    ];

echo $classe[1]['notes'][1];
//condition
$note=2;
if ($note>10){
echo "<br>bravo vous avez la moyenne<br>";
}else{
    echo "<br>continu de bosser<br>";
}
// pour le formulaire


echo '<pre>';
print_r($_POST);// peremt de checker le formulaire
echo '</pre>';
//********************************************************************************** 
// exercice trois ville paris londre moscou
// phrase : variable le nom de la ville est la capital de la russie
//la ville est la capital de la Russie
//la ville est la capital de l'Angleterre
//la ville est la capital de la France
//***********************************************************************************

if (isset($_POST['select'])){
  if ($_POST['select']=="paris"){
      echo "<br>Paris est la capital de la France<br>";
  }elseif($_POST['select']=="londre"){
    echo "<br>Londre est la capital de l'Angleterre<br>";
}elseif($_POST['select']=="moscou"){
    echo "<br>Moscou est la capital de la Russie<br>";
}
}
// $villeChoisi = $_POST['select'];
// switch ($villeChoisi){
//     case "paris":
//         echo "<br>Paris est la capital de la France<br>";
//     break;
//     case "londre":
//         echo "<br>Londre est la capital de l'Angleterre<br>";
//     break;
//     case "moscou":
//         echo "<br>Moscou est la capital de la Russie<br>";
//     break;

// }
// $tabJour=['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi'];
// foreach($tabJour as $value){
//     echo "le jour est ". ucfirst($value) . "<br>";
// }
?>

<h1>Contact</h1>
<form method="post" action="index.php">
    <label>Villes :</label><br>
    <select name="select">
       <option value="paris">Paris</option>
       <option value="londre">Londre</option>
       <option value="moscou">Moscou</option>
    </select> <br>
    <input type="submit" value="Envoie"/>
</form>
<?php
$prez = "je m'appelle JC";
$age = 49;
$age2 ="49";
$vrai = true;
$faux = false;
$distance = 2.84;

echo'<br>';
echo gettype($prez);//gettype donne le type de la variable
echo "<br>la variable \$faux contient une valeur de type ";
echo gettype($faux);
echo "<br>la variable \$distance contient une valeur de type ";
echo gettype($distance);
//modulo %
$m = 5 % 3;
echo '<br>le reste de la division de 5 par 3 est :'. $m;
$x= "2";
$x = +$x;
echo '<br>'.$x;
$x +=$x;
echo '<br>'.$x;
$a ="Bonjour";
$a .=" le monde";   
echo '<br>$a stocke : '.$a. '<br>';

//****************************    ************************************* 
// exercice 1 fair une variable longueur et largeur et result           
//********************************************************************* 

// $longeur= $_POST['longueur'];
// $largeur= $_POST['largeur'];
// $result = $longeur * $largeur ;
// echo '<br> l\'aire est : '.$result.'m2';

if($_POST){
    
    $result = $_POST['longeur'] * $_POST['largeur'] ;
    echo '<br> l\'aire est : '.$result.'m2';
   
}

?>

<form action="index.php" method="POST">

    <label for="longueur">Longueur</label><br>
    <input type="text" name="longeur"><br>

    <label for="largeur">Largeur</label><br>
    <input type="text" name="largeur"><br>

    <input type="submit" value="Envoie"/><br>
</form>

<?php

// ********************************************************************** 
// exercice 2 afficher la suite de Fibonacci avec une boucle for          
// ********************************************************************** 
// PHP code to get the Fibonacci series 
function Fibonacci($n){ 
  
    $num1 = 0; 
    $num2 = 1; 
  
    $counter = 0; 
    while ($counter < $n){ 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
        $counter = $counter + 1; 
    } 
} 
  
// Driver Code 
$n = 10; 
Fibonacci($n);
// ******************************************************
// test debug
// ******************************************************
echo '<br>';
echo '<br>';
echo '<br>';
var_dump($classe);
echo '<br>';
var_export($classe);
echo '<br>';
print_r($classe);
echo '<br>';
// ********************************************************
// operateur
// ********************************************************
