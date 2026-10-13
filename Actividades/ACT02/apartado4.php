<?php

echo "<h1>Ejercicio 1:</h1>";

// Crear array de conciertos
$concerts = array(
    array(
        "nom" => "Grupo1",
        "escenari" => "Escenario1",
        "hora" => "18:00",
        "assistents" => 4200,
        "preu" => 28.0
    ),
    array(
        "nom" => "Grupo2",
        "escenari" => "Escenario2",
        "hora" => "19:00",
        "assistents" => 1850,
        "preu" => 18.0
    ),
    array(
        "nom" => "Grupo3",
        "escenari" => "Escenario1",
        "hora" => "20:00",
        "assistents" => 3600,
        "preu" => 24.0
    ),
    array(
        "nom" => "Grupo4",
        "escenari" => "Escenario2",
        "hora" => "21:00",
        "assistents" => 2100,
        "preu" => 20.0
    ),
    array(
        "nom" => "Grupo5",
        "escenari" => "Escenario1",
        "hora" => "22:00",
        "assistents" => 5100,
        "preu" => 32.0
    ),
    array(
        "nom" => "Grupo6",
        "escenari" => "Escenario2",
        "hora" => "23:00",
        "assistents" => 900,
        "preu" => 15.0
    )
);

// Mostrar los conciertos en una tabla
echo "<table border='1'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Escenario</th>";
echo "<th>Hora</th>";
echo "<th>Asistentes</th>";
echo "<th>Precio</th>";
echo "</tr>";

foreach($concerts as $concierto):
    echo "<tr>";
    echo "<td>" . $concierto["nom"] . "</td>";
    echo "<td>" . $concierto["escenari"] . "</td>";
    echo "<td>" . $concierto["hora"] . "</td>";
    echo "<td>" . $concierto["assistents"] . "</td>";
    echo "<td>" . number_format($concierto["preu"], 2, ",", ".") . " euros</td>";
    echo "</tr>";
endforeach;

echo "</table>";

// Mostrar el nombre del tercer concierto sin bucle
echo "<p>El tercer concierto es: ";
echo $concerts[2]["nom"];
echo "</p>";


echo "<h1>Ejercicio 2:</h1>";

// Crear array asociativo de escenarios
$escenaris = array(
    "Escenario1" => array(
        "capacidad" => 6000,
        "cubierto" => "no",
        "ubicacion" => "Pista central"
    ),
    "Escenario2" => array(
        "capacidad" => 2500,
        "cubierto" => "si",
        "ubicacion" => "Pabellon"
    )
);

// Mostrar la capacidad del Escenario1
echo "<p>Capacidad del Escenario1: ";
echo $escenaris["Escenario1"]["capacidad"];
echo " personas</p>";

// Recorrer los escenarios y sus datos
foreach($escenaris as $escenario => $datos):

    echo "<h2>" . $escenario . "</h2>";
    echo "<ul>";

    foreach($datos as $campo => $valor):
        echo "<li>" . $campo . ": " . $valor . "</li>";
    endforeach;

    echo "</ul>";

endforeach;

?>