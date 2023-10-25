<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $Fecha = $_GET["Fecha"];
    $Descripción = $_GET["Descripción"];
    $Categoría = $_GET["Categoría"];
    $Monto = $_GET["Monto"];
    $Frecuencia = $_GET["Frecuencia"];
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del procesamiento</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <p class="Gasto"> ¡Gasto registrado! </p> 
    <br>
    <br>
    <p>Detalles del gasto:</p>
    <ol>
        <li>Fecha: <?php echo $Fecha; ?> </li>
        <li>Descripción: <?php echo $Descripción; ?> </li>
        <li>Categoría: <?php echo $Categoría; ?> </li>
        <li>Monto: <?php echo $Monto; ?> </li>
        <li>Frecuencia: <?php echo $Frecuencia ?> </li>
    </ol>
    <a class="Link" href="index.html">Volver a la página principal</a>
</body>
</html>