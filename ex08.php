<?php 
    /* Crear array asociativo con:
     - nombre
     - curso
     - edat
     - nota_media

     10 alumnos

     Mostrar en table html
    */

$alumnos = [
    ['nombre' => 'Jose Juan', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 6],
    ['nombre' => 'Juanjo', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 7],
    ['nombre' => 'Erik', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 3],
    ['nombre' => 'Esteban', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 2],
    ['nombre' => 'Fran', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 10],
    ['nombre' => 'Ricardo', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 8],
    ['nombre' => 'Maria Jose', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 4],
    ['nombre' => 'Jose Maria', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 1],
    ['nombre' => 'Miguel', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 9],
    ['nombre' => 'Juan Jose', 'curso' => 'DAW', 'edat' => 19, 'nota_media' => 5],
];

    // count — Cuenta todos los elementos de un array o en un objeto Countable
    echo count($alumnos);

    // in_array — Indica si un valor pertenece a un array (no acaba de funcionar)
    if (in_array(10, $alumnos, true)) {
        echo "Hola";
    }

    // array_key_exists — Verifica si una clave existe en un array
    var_dump(array_key_exists('edat', $alumnos));

    // sort — Ordena un array en orden creciente


    // rsort


    // ksort


    // array_sum


    // array_max


    // array_min


    // array_column


    // implode


    // explode


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, tr, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Curso</th>
            <th>Edat</th>
            <th>Nota media</th>
        </tr>
        <?php foreach($alumnos as $a) : ?>
            <tr>
                <td><?= $a['nombre'] ?></td>
                <td><?= $a['curso'] ?></td>
                <td><?= $a['edat'] ?></td>
                <td><?= $a['nota_media'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>