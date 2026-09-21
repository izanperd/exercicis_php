<?php

echo 'Hola';
echo 'Hola', ' ', 'mundo';
echo '<p>Text</p>';

$x = 1;
$dades = 2;
print 'Hola';       // Retorna 1
var_dump($x);       // per depurar  // error: variable no declarada
print_r($dades);    // llegible     // error: variable no declarada



$nom = 'Aina';
$edat = 19;
$actiu = true;

$nom = 'Bernat';    // es pot canviar
$total = $edat + 1;

echo $nom;



$x = 5;             // int
$x = 'cinc';        // ara string

$a = '10' + 5;      // 15 (int)
$b = '10' . 5;      // 105 (string)

var_dump($a, $b);



$nom = 'Aina';
echo 'Hola $nom';   // Hola $nom
echo "<br>";
echo "Hola $nom";   // Hola Aina
echo "<br>";



$nom = 'Aina'; $punts = 8;

echo 'Hola ' . $nom . ', tens ' . $punts . ' punts';    // concatenacio amb .
echo "<br>";
echo "Hola $nom, tens $punts punts";                    // interpolacio
echo "<br>";
echo "Hola {$nom}, tens {$punts} punts";                // interpolacio amb claus
echo "<br>";



define('IVA', 0.21);
const BOTIGA = 'Ca la Web';

echo BOTIGA;        // sense $
$base = 10;
$total = $base * (1 + IVA);         // error: $base no estaba definido

// IVA = 0.10 -> error fatal



$missatge = 'Hola'; // ambit global

function saluda($missatge){
    echo $missatge; // no la veu    // error: missatge no se ve, he puesto que lo reciba la funcion y que lo muestre
    $intern = 'Adeu'; // ambit local
    echo $intern;                   // error: no ve $intern fuera, por lo que lo he puesto dentro
}

saluda($missatge);
// echo $intern;       // tampoc la veu    



// declare(strict_types=1);                     Primera linea del ficher, PHP deixa de convertir tipus pel seu compte
// ini_set('display_errors', '1');              Canvia un parametre nomes per a aquesta peticio
// error_reporting(E_ALL);                      Decideix quins nivells d'errors es tenen en compte ara mateix
// setlocale() * data_default_timezone_set()    idioma i zona horaria per a aquest script




?>