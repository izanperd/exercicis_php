<?php

echo "<h1>Ejercicio 1:</h1>";

// Asignacion de grupos
$grupos[0] = "Grupo1";
$grupos[] = "Grupo2";
$grupos[8] = "Grupo3";
$grupos[] = "Grupo4";
$grupos[] = "Grupo5";

// Estilos con array
$estilos = array("Estilo1", "Estilo2", "Estilo3");

// Ediciones con range
$ediciones = range(2019, 2026);

// explode
$frase = "Hola muy buenas que tal";
$palabras = explode(" ", $frase);

// Mostrar los arrays
echo "<h2>Array de grupos</h2>";
echo "<pre>";
print_r($grupos);
echo "</pre>";

echo "<h2>Array de estilos</h2>";
echo "<pre>";
print_r($estilos);
echo "</pre>";

echo "<h2>Array de ediciones</h2>";
echo "<pre>";
print_r($ediciones);
echo "</pre>";

echo "<h2>Array de palabras</h2>";
echo "<pre>";
print_r($palabras);
echo "</pre>";

// Diferencias entre las funciones
echo "<h2>Comparacion de funciones</h2>";

echo "<pre>";
print_r($estilos);
echo "</pre>";

echo "<pre>";
var_dump($estilos);
echo "</pre>";

echo "<pre>";
var_export($estilos);
echo "</pre>";

/*
print_r() --> muestra el contenido de forma legible
var_dump() --> muestra tambien el tipo y la longitud de los valores
var_export() --> muestra una representacion del array como codigo PHP
*/


echo "<h1>Ejercicio 2:</h1>";

// Dos grupos con asignacion directa
$estilosGrupos["Grupo1"] = "Estilo1";
$estilosGrupos["Grupo2"] = "Estilo2";

// Dos grupos con array()
$otrosEstilos = array(
    "Grupo3" => "Estilo3",
    "Grupo4" => "Estilo4"
);

// Añadir los otros grupos al array principal
$estilosGrupos = array_merge($estilosGrupos, $otrosEstilos);

// Mostrar el estilo de un grupo concreto
echo "<p>Estilo del Grupo2: ";
echo $estilosGrupos["Grupo2"];
echo "</p>";

// Añadir un grupo nuevo
$estilosGrupos["Grupo5"] = "Estilo5";

echo "<pre>";
print_r($estilosGrupos);
echo "</pre>";

echo "<p>Total de grupos: " . count($estilosGrupos) . "</p>";


echo "<h1>Ejercicio 3:</h1>";

$gruposNumericos = array(
    "Grupo1",
    "Grupo2",
    "Grupo3",
    "Grupo4",
    "Grupo5"
);

echo "<p>Elementos iniciales: " . count($gruposNumericos) . "</p>";

// Borrar el tercer grupo, que esta en el indice 2
unset($gruposNumericos[2]);

echo "<p>Array despues de unset()</p>";
echo "<pre>";
print_r($gruposNumericos);
echo "</pre>";

echo "<p>Elementos despues de borrar: ";
echo count($gruposNumericos);
echo "</p>";

// Añadir un grupo nuevo
$gruposNumericos[] = "Grupo6";

echo "<p>Array despues de anadir un grupo</p>";
echo "<pre>";
print_r($gruposNumericos);
echo "</pre>";

/*
unset() elimina el elemento, pero no reorganiza los indices
Un for desde 0 hasta count()-1 puede intentar acceder a un
indice que ya no existe porque quedan huecos en el array
*/

?>