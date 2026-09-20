<?php
require "dades.php";

$llegits = 0;
$noLlegits = 0;
$suma = 0;

foreach ($biblioteca as $llibre) {
    if ($llibre['llegit']) {
        $llegits++;
        $suma += $llibre['valoracio'];
    } else {
        $noLlegits++;
    }
}

$mitjana = round($suma / $llegits, 1);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Tasca 1 B1 613</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            margin: 30px;
        }

        h1 {
            color: #008f75;
        }

        a {
            color: white;
            background: #008f75;
            padding: 8px;
            text-decoration: none;
        }
    </style>
</head>

<body>

<h1>Tasca 1 B1 613</h1>

<h2>La Biblioteca de DAW</h2>

<p>
    Llibres llegits: <?php echo $llegits; ?> |
    No llegits: <?php echo $noLlegits; ?> |
    Valoració mitjana: <?php echo $mitjana; ?>
</p>

<p>
    <a href="llista.php">Llista</a>
    <a href="taula.php">Taula</a>
</p>

</body>
</html>