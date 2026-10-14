<?php

/*
    PAS 1: Les dades arriben per GET
    Mirar la url si van les dades
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat PAS 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Que ha arribat al servidor?</h1>

    <h2>$_GET</h2>
    <pre><?php print_r($_GET); ?></pre>

    <h2>$_POST</h2>
    <pre><?php print_r($_POST); ?></pre>

    <p><a href="pas1-formularis.html">Tornar</a></p>
    
</body>
</html>