<?php  

    // Reglas del juego 
    const juego = "Miau"; 
    const maxHP = 200; 
    const needExp = 10; 
    const maxSTR = 100; 
    const herida = 0.60; 
 
    // Stats personajes 
    $nombre = "Gato"; 
    $clase = "Felino"; 
    $nivel = 1; 
    $HP = 150; 
    $STR = 50; 
    $exp = 0; 
    $baseDMG = 10; 
 
    // Calculos de porcentajes 
    $porcentajeHP = round(($HP / maxHP) * 100, 1); 
    $porcentajeSTR = round(($STR / maxSTR) * 100, 1); 
    $porcentajeExp = round(($exp / needExp) * 100, 1); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .ficha {
            width: 600px;
            margin: 40px auto;
            border: 1px solid black;
            padding: 25px;
            text-align: left;
        }
        h1 {
            text-align: center;
        }
        .dato {
            margin: 15px 0;
        }
        .barra {
            width: 100%;
            height: 20px;
            border: 1px solid black;
        }
        .relleno {
            height: 100%;
            background-color: black;
        }

    </style>
</head>

<body>

    <div class="ficha">

        <!-- Nombre del personaje -->
        <?php echo "<h1>$nombre</h1>" ?>

        <!-- Clase y nivel del presonaje -->
        <?php echo "<p>Clase: $clase</p>" ?>
        <?php echo "<p>Nivel: $nivel</p>" ?>

        <!-- Cantidad de vida y porcentaje con una barra -->
        <div class="dato">
            <?php echo "Vida: $HP / " . maxHP . " ($porcentajeHP %)"; ?>

            <div class="barra">
                <div class="relleno" style="width: <?php echo $porcentajeHP; ?>%;"></div>
            </div>
        </div>

        <!-- Cantidad de fuerza y porcentaja con una barra -->
        <div class="dato">
            <?php echo "Fuerza: $STR / " . maxSTR . " ($porcentajeSTR %)"; ?>

            <div class="barra">
                <div class="relleno" style="width: <?php echo $porcentajeSTR; ?>%;"></div>
            </div>
        </div>

        <!-- Fuerza y experiencia del presonaje -->
        <?php echo '<p>Daño base: ' . $baseDMG . '</p>' ?>
        <?php echo '<p>Experiencia: ' . $exp . ' / '. needExp . ' (' . $porcentajeExp . '%)</p>' ?>

    </div>

</body>
</html>