<?php
    /**
    * 4. Un restaurante con una serie de platos y sus menús.
    * @author Jesús Ferrer López
    * @date 06/10/2024
    */

    $num_menu = 1;
    $descuento = 0.2;
    $precio_menu = 0;
    $platos = [
        "Primeros" => [
            "tortilla" => [10, "./img/tortilla.jpg"],
            "ensalada" => [8, "./img/ensalada.jpg"],
            "sopa" => [7, "./img/sopa.jpg"]
        ],
        "segundos" => [
            "filete" => [15, "./img/filete.jpg"],
            "pescado" => [12, "./img/pescado.jpg"],
            "pollo" => [10, "./img/pollo.jpg"],
            "hamburguesa" => [8, "./img/hamburguesa.jpg"],
            "pizza" => [7, "./img/pizza.jpg"]
        ],
        "postres" => [
            "flan" => [5, "./img/flan.jpg"],
            "helado" => [4, "./img/helado.jpg"],
            "tarta" => [6, "./img/tarta.jpg"]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej 03</title>
</head>
<body>
    <?php
        // Vamos a crear un menú con primero, segundo y postre, y vamos a hacer todas las combinaciones posibles.
        foreach ($platos["Primeros"] as $primero => $datosPrimero) {
            foreach ($platos["segundos"] as $segundo => $datosSegundo) {
                foreach ($platos["postres"] as $postre => $datosPostre) {
                    echo "<h2>Menú $num_menu</h2>";
                    $num_menu++;
                    $precio_menu = $datosPrimero[0] + $datosSegundo[0] + $datosPostre[0] - ($datosPrimero[0] + $datosSegundo[0] + $datosPostre[0]) * $descuento;
                    echo "<h3>Primer plato: $primero</h3>";
                    echo "<p>Precio: $datosPrimero[0]€</p>";
                    echo "<img src='$datosPrimero[1]' alt='Foto de $primero' width='200px' height='200px'>";
                    echo "<h3>Segundo plato: $segundo</h3>";
                    echo "<p>Precio: $datosSegundo[0]€</p>";
                    echo "<img src='$datosSegundo[1]' alt='Foto de $segundo' width='200px' height='200px'>";
                    echo "<h3>Postre: $postre</h3>";
                    echo "<p>Precio: $datosPostre[0]€</p>";
                    echo "<img src='$datosPostre[1]' alt='Foto de $postre' width='200px' height='200px'>";
                    echo "<h3>Precio total: $precio_menu €</h3>";
                }
            }
        }
        /*
        foreach ($platos as $tipo => $plato) {
            echo "<h2>$tipo</h2>";
            foreach ($plato as $nombre => $datos) {
                echo "<h3>$nombre</h3>";
                echo "<p>Precio: $datos[0]€</p>";
                echo "<img src='$datos[1]' alt='Foto de $nombre' width='200px' height='200px'>";
            }
        }
        */
    ?>
</body>
</html>