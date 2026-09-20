<?php
require "dades.php";
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de llibres</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            margin: 30px;
        }
            
        h1 {
            color: #008f75;
        }

        table {
            background: white;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background: #008f75;
            color: white;
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

<br><br>

<table>

<tr>
    <th>ID</th>
    <th>Títol</th>
    <th>Autor</th>
    <th>Any</th>
    <th>Gènere</th>
    <th>Llegit</th>
    <th>Valoració</th>
</tr>

<?php foreach ($biblioteca as $llibre) { ?>

<tr>

    <td><?php echo $llibre['id']; ?></td>
    <td><?php echo $llibre['titol']; ?></td>
    <td><?php echo $llibre['autor']; ?></td>
    <td><?php echo $llibre['any']; ?></td>
    <td><?php echo $llibre['genere']; ?></td>

    <td>
        <?php
        if ($llibre['llegit']) {
            echo "Sí";
        } else {
            echo "No";
        }
        ?>
    </td>

    <td><?php echo $llibre['valoracio']; ?>/5</td>

</tr>

<?php } ?>

</table>

<br>

<a href="llista.php">Veure llista</a>

</body>
</html>