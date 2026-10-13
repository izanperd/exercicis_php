<?php

echo "<h1>Ejercicio 1:</h1>";

// Crear array de grupos
$grupos = array(
    "Grupo1",
    "Grupo2",
    "Grupo3",
    "Grupo4",
    "Grupo5"
);

// Comprobar si los grupos estan en el cartel
if(in_array("Grupo1", $grupos, true)){
    echo "<p>Grupo1 esta en el cartel</p>";
}else{
    echo "<p>Grupo1 no esta en el cartel</p>";
}

if(in_array("Grupo8", $grupos, true)){
    echo "<p>Grupo8 esta en el cartel</p>";
}else{
    echo "<p>Grupo8 no esta en el cartel</p>";
}

// Funcion para buscar la posicion de un grupo
function buscaGrup(array $llista, string $grup): int{
    foreach($llista as $posicion => $nombre){
        if($nombre === $grup){
            return $posicion;
        }
    }

    return -1;
}

// Buscar un grupo que existe
echo "<p>Posicion del Grupo3: ";
echo buscaGrup($grupos, "Grupo3");
echo "</p>";

// Buscar un grupo que no existe
echo "<p>Posicion del Grupo8: ";
echo buscaGrup($grupos, "Grupo8");
echo "</p>";


echo "<h1>Ejercicio 2:</h1>";

// Crear array asociativo de grupos y asistentes
$asistentes = array(
    "Grupo1" => 5100,
    "Grupo2" => 1850,
    "Grupo3" => 2100,
    "Grupo4" => 3600,
    "Grupo5" => 4200
);

// Crear cuatro copias del array
$orden1 = $asistentes;
$orden2 = $asistentes;
$orden3 = $asistentes;
$orden4 = $asistentes;

// Ordenar por valor de menor a mayor
asort($orden1);

// Ordenar por valor de mayor a menor
arsort($orden2);

// Ordenar por clave de menor a mayor
ksort($orden3);

// Ordenar por clave de mayor a menor
krsort($orden4);

// Mostrar los arrays ordenados
echo "<h2>asort(): de menor a mayor</h2>";
echo "<pre>";
print_r($orden1);
echo "</pre>";

echo "<h2>arsort(): de mayor a menor</h2>";
echo "<pre>";
print_r($orden2);
echo "</pre>";

echo "<h2>ksort(): por clave de menor a mayor</h2>";
echo "<pre>";
print_r($orden3);
echo "</pre>";

echo "<h2>krsort(): por clave de mayor a menor</h2>";
echo "<pre>";
print_r($orden4);
echo "</pre>";

/*
asort() ordena por los valores del array
ksort() ordena por las claves del array
Las dos funciones mantienen las claves asociadas a sus valores
*/


echo "<h1>Ejercicio 3:</h1>";

// Mezclar el array asociativo
$mezclaAsociativa = $asistentes;

shuffle($mezclaAsociativa);

echo "<h2>Array asociativo mezclado</h2>";
echo "<pre>";
print_r($mezclaAsociativa);
echo "</pre>";

/*
shuffle() mezcla los elementos y cambia las claves por indices numericos
Por eso los nombres de los grupos dejan de ser las claves
*/

// Crear un array con los nombres de los grupos
$cartel = array(
    "Grupo1",
    "Grupo2",
    "Grupo3",
    "Grupo4",
    "Grupo5"
);

// Mezclar los grupos
shuffle($cartel);

// Mostrar el orden del sorteo
echo "<h2>Orden del sorteo</h2>";
echo "<ol>";

foreach($cartel as $grupo):
    echo "<li>" . $grupo . "</li>";
endforeach;

echo "</ol>";

?>