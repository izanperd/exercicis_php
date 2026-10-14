<?php

/*
    PAS 3 - Una sola pagina
    Fins ara teniem dos fitxers, el formulari i el resultat
    Mira com es fa la peticio i aixi fara una cosa o altre
    La primera visita es com GET i quan es prem el boto d'enviar es amb POST
*/

$nom = '';
$correu = '';
$dia = '';

// Var de control
$enviar = false;

// Array predefinido $_SERVER nos da informacion del servidor
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

?>