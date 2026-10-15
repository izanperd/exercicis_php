<?php

/*
    PAS 3 - Una sola pagina
    Fins ara teniem dos fitxers, el formulari i el resultat
    Mira com es fa la peticio i aixi fara una cosa o altre
    La primera visita es com GET i quan es prem el boto d'enviar es amb POST
*/

$nom = '';
$correu = '';
$correu2 = '';
$tel = '';
$dia = '';
$ano = '';

// Var de control
$enviat = false;

// Array predefinido $_SERVER nos da informacion del servidor
//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";

/*
Si el request method es POST es que ya se ha clicado al boton de enviar del formulario con method=post
*/

if($correu == $correu2){
    if($_SERVER ['REQUEST_METHOD'] === 'POST'){
        $nom = trim($_POST['nom'] ?? '');
        $correu = trim($_POST['correu'] ?? '');
        $tel = trim($_POST['tel'] ?? '');
        $dia = trim($_POST['dia'] ?? 'No especificado');
        $ano = trim($_POST['ano'] ?? '');
        $enviat = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Inscripcio al festival</h1>

    <?php if($enviat): ?>
        <p>Inscripcio rebuda: <?= $nom; ?> (correu: <?= $correu ?>, telefon: <?= $tel ?>), dia <?= $dia ?> <?= $ano ?>. </p>
    <?php endif; ?>

    <form action="pas3-resultat.php" method="post">
        <label for="name"></label>
        <input name="nom" id="nom" placeholder='nombre'>

        <label for="correu"></label>
        <input name="correu" id="correu" type="email" placeholder='correo'>

        <label for="correu2"></label>
        <input name="correu2" id="correu2" type="email" placeholder='verificar correo'>

        <label for="tel"></label>
        <input name="tel" id="tel" type="tel" placeholder='telefono'>

        <label for="dia"></label>
        <select name="dia" id="dia">
            <option value="divendres">Divendres</option>
            <option value="dissabte">Dissabte</option>
        </select>

        <label for="ano"></label>
        <input name="ano" id="ano" type="number" placeholder='año'>

        <button>Inscriure'm</button>
    </form>

</body>
</html>