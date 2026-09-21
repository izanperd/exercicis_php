<?php

echo 'Hola';
echo 'Hola', ' ', 'mundo';
echo '<p>Text</p>';

print 'Hola';       // Retorna 1
var_dump($x);       // per depurar
print_r($dades);    // llegible



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
$total = $base * (1 + IVA);

// IVA = 0.10 -> error fatal



$missatge = 'Hola'; // ambit global

function saluda(){
    echo $missatge; // no la veu
    $intern = 'Adeu'; // ambit local
}

saluda();
echo $intern;       // tampoc la veu



// declare(strict_types=1);                     Primera linea del ficher, PHP deixa de convertir tipus pel seu compte
// ini_set('display_errors', '1');              Canvia un parametre nomes per a aquesta peticio
// error_reporting(E_ALL);                      Decideix quins nivells d'errors es tenen en compte ara mateix
// setlocale() * data_default_timezone_set()    idioma i zona horaria per a aquest script




?>