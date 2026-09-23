<?php
/*
Aquest fitxer te 6 errors: 3 de sintaxi (PHP no arrenca)
i 3 de logica (funciona, pero el resultat no es el correcte)

Arregla'ls d'un en un, comprovant la pagina despres de cada canvi
Anota a error-trobats.md quin era, com bte n'has adonat i com l'has resolt
*/

$nom = 'Aina'; // faltaba el $
$assignatura = 'Desenvolupament web'; // faltaba el ;

$nota1 = 7;
$nota2 = 9;
$mitjana = ($nota1 + $nota2) / 2; // faltaba el parentesis para que se haga primero la suma

echo '<h1>Bulleti de notes</h1>';
echo "<p>Alumna: $nom</p>"; // se tenia que poner las " para que el $nom se viese bien
echo '<p>Assignatura: ' . $assignatura . '</p>'; // se tiene que poner . y no +
echo "<p>Mitjana: $mitjana</p>"; // faltaban las commillas del final

echo '<p>Generat el ' . date('d/m/Y') . '</p>';