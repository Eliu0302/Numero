<?php
$numeros = [1, 2, 3, 4];

shuffle($numeros);
$seleccionados = array_slice($numeros, 0, 3);

$segundoNumero = isset($_POST['seleccionar']) ? $seleccionados[1] : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Números</title>
</head>
<body>
    <h2>Números Generados:</h2>
    <ul>
        <?php foreach ($seleccionados as $numero) { echo "<li>$numero</li>"; } ?>
    </ul>
    
    <form method="post">
        <button type="submit" name="seleccionar">Seleccionar el Segundo Número</button>
    </form>
    
    <?php if ($segundoNumero): ?>
        <h3>El segundo número seleccionado es: <?php echo $segundoNumero; ?></h3>
    <?php endif; ?>
</body>
</html>
