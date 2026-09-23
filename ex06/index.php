<?php

const IVA = 21;
const producto = 99.99;
const descuento = 10;
const id = "CAM-1425376";

const tienda = "Tienda online";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?= tienda ?></h1>
        <p>Esto es una <?= tienda ?></p>
    </header>

    <main>
        <article class="producte">
            <h2>Producto</h2>
            <p class="descripcio">Producto 1</p>
            <p class="preu">Preu sense IVA: <?= producto ?> EUR</p>
            <p class="preu">IVA (<?= IVA ?>%)</p>
            <p class="total">TOTAL: <?= round(producto + ((producto / 100 ) * IVA), 2) ?> EUR</p>
            <p class="estoc">Unitats disponibles: 5</p>
            <p class="ref"><?= id ?></p>
        </article>
    </main>

    <footer>
        <p>Footer de la tienda SL</p>
    </footer>

</body>
</html>

<!-- 
Canvia l'extensió a .php i comprova que segueix funcionant igual
Puja totes les dades a un bloc PHP al capdamunt del fitxer
Substitueix cada valor del HTML per < ?=?> i fes que l'IVA i el total es calculin sols
Defineix les constants IVA, BOTIGA, MONEDA i DESCOMPTE_SOCI amb define() o const
Substitueix al teu index.php tots els valors fixos per les contants
Intenta canviar el valor d'una constant pagina i anota l'error que dona
-->