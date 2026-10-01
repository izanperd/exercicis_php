<?php

// Funciones con cadenas de texto (strings)
$cadena = "Hola";
$cadena[0] = "C";

echo "Ahora cadena es: $cadena <br>"; // Saldria Cola (H por C)

// Funciones preestablecidas de PHP

// strlen --> medir la longitud de la cadena
$cadena = "Aquesta cadena té moltes lletres";
$num_caracters = strlen($cadena);

echo "El total de caracters es: $num_caracters <br>";

// strpos --> retorna la casella on troba la subcadena dins de la cadena pasada
// Sempre retorna la primera ocurrencia
$email = "hola@jviladoms.cat";
echo "Posicio @: " . strpos($email, "@") . "<br>";

// strcmp --> string compare, compara dos cadenas
// si retorna 0 es igual
// strcmp($cad1, $cad2);
// si retorna <0 la primera cadena es mas pequeña
// si retorna >0 la primera cadena es mas grande
$cad1 = "Alejandra";
$cad2 = "Pepeeeeeeeeee";
echo "Utilizamos strcmp: " . strcmp($cad1, $cad2) . "<br>";

// substr --> retorna una subcadena de caracters d'una cadena a partir d'una posicio espesificada fins als final o del tamany especificat
// La cadena original no pateix cap modificacio
$cadena = "PHP es un llenguatge facil";
echo "El substr de 0 a 3 es: " . substr($cadena, 0, 3) . "<br>"; // Saldra PHP
echo "El substr de 21" . substr($cadena, 21) . "<br>";

// trim --> eliminar los espacios en blanco y saltamos de linea que hay al principio y al final de una cadena
echo "Ejemplo con trim: " . trim("                 hola que tal                   ") . "<br>";

// ltrim --> elimina los espacios que hay en blanco al principio de la cadena
echo "Ejemplo con ltrim: " . ltrim("                 hola que tal                   . ") . "<br>";

// str_replace($antiga, $nova, $cadena) --> substitueix la cadena $antiga per la cadena $nova dins de $cadena
$cadena = "PHP es facil";
$antiga = "es facil";
$nova = "no es dificil";

echo "Ejemplo str_replace: " . str_replace($antiga, $nova, $cadena) . "<br>";

// ereg_replace / eregi_replace()

// strtolower($cadena) --> passa la cadena a minusculas

// strtoupper($cadena) --> passa la cadena a majuscules

// explode --> pemet dividir una cadena segons un caracter o patro


// Exercici 1: busca en php.net la funcion: str_word_count() y pon un ejemplo


// Exercici 2: busca en php.net la funcion: levenshtein() y pon un ejemplo


// Exercici 3: busca que es el operador ternario y pon un ejemplo


// Exercici 4: explicar que hace esta funcion:
function funcionMultipleReturns($v1, $v2, $v3){
    $v1 = "variable1";
    $v2 = "variable2";
    $v3 = "variable3";

    return array($v1, $v2, $v3);
}

// Exercici 5: crear una funcion comprova_email(...) que reciba una cadena de caracteres como parametro
// que contiene un email y hace las siguientes comprobaciones:
// - convertir a minusculas
// - eliminar todos los espacios en blanco
// - comprobar si tiene el caracter @
// - contar el numero de caracteres

?>