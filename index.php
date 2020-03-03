<?php 
    $array = [50,20,200,30,1,2];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenerar Arrays</title>
</head>
<body>
    Programa para Ordenar Arreglos: <br>
    Array de Entrada: <?= implode(',', $array) ?>
    <br>
    <?php sort($array) ?>
    Array de Salida: <?= implode(',', $array)  ?>

    Finalizando
</body>
</html>