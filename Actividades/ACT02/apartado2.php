<?php

echo "<h1>Ejercicio 1:</h1>";

// Crear array de grupos
$grupos = array(
    0 => "Grupo1",
    1 => "Grupo2",
    2 => "Grupo3",
    3 => "Grupo4",
    4 => "Grupo5"
);

// Mostrar los grupos con una lista
echo "<h2>Lista de grupos</h2>";
echo "<ul>";

foreach($grupos as $grupo):
    echo "<li>" . $grupo . "</li>";
endforeach;

echo "</ul>";

// Mostrar los grupos con su posicion
echo "<h2>Grupos con posicion</h2>";
echo "<ul>";

foreach($grupos as $posicion => $grupo):
    echo "<li>Posicion " . $posicion . ": " . $grupo . "</li>";
endforeach;

echo "</ul>";


echo "<h1>Ejercicio 2:</h1>";

// Crear array asociativo de grupos y estilos
$estilosGrupos = array(
    "Grupo1" => "Estilo1",
    "Grupo2" => "Estilo2",
    "Grupo3" => "Estilo3",
    "Grupo4" => "Estilo4"
);

// Mostrar los grupos y sus estilos en una tabla
echo "<table border='1'>";
echo "<tr><th>Grupo</th><th>Estilo</th></tr>";

foreach($estilosGrupos as $grupo => $estilo):
    echo "<tr>";
    echo "<td>" . $grupo . "</td>";
    echo "<td>" . $estilo . "</td>";
    echo "</tr>";
endforeach;

// Mostrar el total de grupos
echo "<tr>";
echo "<th>Total de grupos</th>";
echo "<th>" . count($estilosGrupos) . "</th>";
echo "</tr>";

echo "</table>";


echo "<h1>Ejercicio 3:</h1>";

// Volver al principio del array
reset($estilosGrupos);

// Recorrer el array sin foreach
echo "<table border='1'>";
echo "<tr><th>Grupo</th><th>Estilo</th></tr>";

do{
    $grupo = key($estilosGrupos);
    $estilo = current($estilosGrupos);

    echo "<tr>";
    echo "<td>" . $grupo . "</td>";
    echo "<td>" . $estilo . "</td>";
    echo "</tr>";

}while(next($estilosGrupos));

// Mostrar el total de grupos
echo "<tr>";
echo "<th>Total de grupos</th>";
echo "<th>" . count($estilosGrupos) . "</th>";
echo "</tr>";

echo "</table>";

/*
foreach me parece mas claro porque recorre el array directamente
Con do-while tengo que controlar el puntero manualmente
*/


echo "<h1>Ejercicio 4:</h1>";

// Funcion para recorrer un array al reves
function recorrerInvers(array $lista): void{
    end($lista);

    do{
        $posicion = key($lista);
        $valor = current($lista);

        echo "<p>Posicion " . $posicion . ": " . $valor . "</p>";

    }while(prev($lista));
}

// Mostrar los grupos al reves
echo "<h2>Grupos al reves</h2>";
recorrerInvers($grupos);

// Mostrar los estilos al reves
echo "<h2>Estilos al reves</h2>";
recorrerInvers($estilosGrupos);

// Comprobar que el array original sigue igual
echo "<h2>Array original de grupos</h2>";

foreach($grupos as $grupo):
    echo "<p>" . $grupo . "</p>";
endforeach;

/*
La funcion recibe una copia del array
Mover el puntero dentro de la funcion no modifica el array original
*/

?>