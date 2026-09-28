<?php 
// if, elseif, else
$nota = 7.5;

if($nota >= 9){
    $qualif = 'Excelente';
}elseif($nota >= 7){
    $qualif = 'Notable';
}elseif($nota >= 5){
    $qualif = 'Aprobado';
}else{
    $qualif = 'Suspendido';
}

// switch case
$zona = 'local';
$enviament = 0;
switch($zona){
    case 'local':
        $enviament = 0;
        break;
    case 'peninsula':
        $enviament = 4.95;
        break;
    default:
        $enviament = 9.95;
}

$enviament = match($zona){
    'local' => 0,
    'peninsula' => 4.94,
    'default' => 9.95,
};

// for
for($i = 1; $i <= 10; $i++){
    echo $i;
}

// while
$saldo = 1;
$objectiu = 2;
$anys = 10;
while($saldo < $objectiu){
    $saldo += 1.03;
    $anys++;
}

// do-while
do{
    $n = rand(1, 6);
}while($n !== 6);

// Arrays
$colors = ['vermell', 'verd', 'blau'];

echo $colors[0];        // vermell
echo count($colors);    // 3
$colors[] = 'groc';     // afegeix al final

print_r($colors);


$producte = [
    'nom' => 'Teclat mecanic',
    'preu' => 79.90,
    'estoc' => 4,
];

echo $producte['nom'];
$producte['preu'] = 69.90;

// foreach
foreach($colors as $color){
    echo "<li>$color</li>";
}

foreach($producte as $clau => $valor){
    echo "<dt>$clau</dt>";
    echo "<dd>$valor</dd>";
}

/*
count($a) --> cuantos elementos tiene
in_array($x, $a, true) --> Si un valor esta en el array
array_key_exists('k', $a) --> Si una clave existe
sort / rsort / ksort --> Ordena por valor o por clave
array_sum / max / min --> Suma, maxima, minima
array_column($a, 'preu') --> Treu una columna d'un array d'arrays
implode(', ', $a) / explode --> Array a texto y texto a array
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- If -->
    
    <?php $estoc = 1; if($estoc > 0){
        ?> <p>En estoc</p>
        <?php 
    }else{
        ?> <p>Agotado</p>
        <?php
    } ?>

    <?php if($estoc > 0) : ?>
        <p>En estoc</p>
    <?php else : ?>
        <p>Agotado</p>
    <?php endif; ?>

    <!-- Tabla del 7x7 con for -->
    <table>
    <?php for($i = 1; $i <= 10; $i++): ?>
        <tr>
            <td><?= $i ?> x 7</td>
            <td><?= $i * 7 ?></td>
        </tr>
    <?php endfor; ?>
    </table>

    <?php 
    $productes = [
        ['nom' => 'Teclat', 'preu' => 79.90],
        ['nom' => 'Ratoli', 'preu' => 24.50],
        ['nom' => 'Monitor', 'preu' => 189],
    ];
    ?>
    <?php foreach($productes as $p) : ?>
        <tr>
            <td><?= $p['nom'] ?></td>
            <td><?= $p['preu'] ?> EUR</td>
        </tr>
    <?php endforeach; ?>
</body>
</html>