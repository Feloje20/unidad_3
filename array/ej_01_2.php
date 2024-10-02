<?php
/**
* 1.2 Programa que crea el campo de batalla (en array) de los juegos de hundir la flota.
* @author Jesús Ferrer López
* @date 02/10/2024
*/

// Inicializamos el array
$battlefield = [];

// Rellenamos el array con dos bucles.
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $battlefield[$i][$j] = "Agua"; // Cada elemento del array será agua porque el campo está vacio.
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 2 php</title>
    <style>
        .ver_codigo {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php
        // Representación de nuestro array en una tabla.
        foreach ($battlefield as $linea=>$columnas) {
            echo "<tr>";
            foreach ($columnas as $columna=>$valor) {
                if ($valor === "Agua") {
                    echo "<td><div style='background-color: #5DE2E7;'>agua</div></td>";
                }
                else {
                    echo "<td><div style='background-color: red;'>no agua</div></td>";
                }
            }
            echo "</tr>";
        };
        ?>
    </table>
    <div class="ver_codigo">
        <button type="button"><a href="">Ver código</a></button>
    </div>   
</body>
</html>