<?php
require "dades.php";
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Llista de llibres</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            margin: 30px;
        }

        h1 {
            color: #008f75;
        }

        .llibre {
            background: white;
            padding: 15px;
            margin: 10px 0;
            width: 400px;
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

<a href="index.php">Índex</a>

<ul>

<?php foreach ($biblioteca as $llibre) { ?>

    <li class="llibre">

        <strong><?php echo $llibre['titol']; ?></strong>

        <p>Autor: <?php echo $llibre['autor']; ?></p>
        <p>Any: <?php echo $llibre['any']; ?></p>
        <p>Gènere: <?php echo $llibre['genere']; ?></p>

        <p>
            Llegit:
            <?php
            if ($llibre['llegit']) {
                echo "Sí";
            } else {
                echo "No";
            }
            ?>
        </p>

        <p>Valoració: <?php echo $llibre['valoracio']; ?>/5</p>

    </li>

<?php } ?>

</ul>

<a href="taula.php">Veure taula</a>

</body>
</html>