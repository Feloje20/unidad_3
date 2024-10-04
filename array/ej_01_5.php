<?php
/**
* 1.5 Un array sobre continentes, pasises, capitales y banderas.
* @author Jesús Ferrer López
* @date 02/10/2024
*/

// Inicializamos el array
$continentes = [
    "Europa" => [
        "España" => ["Madrid", "bandera.png"],
        "Francia" => ["Paris", "bandera.png"],
        "Italia" => ["Roma", "bandera.png"],
        "Alemania" => ["Berlin", "bandera.png"],
        "Portugal" => ["Lisboa", "bandera.png"]
    ],
    "Asia" => [
        "China" => ["Pekin", "bandera.png"],
        "Japón" => ["Tokio", "bandera.png"],
        "India" => ["Nueva Delhi", "bandera.png"],
        "Corea del Sur" => ["Seul", "bandera.png"],
        "Indonesia" => ["Yakarta", "bandera.png"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 5 php</title>
    <style>
        .ver_codigo {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <table border="1">
        <th>Continente</th>
        <th>País</th>
        <th>Capital</th>
        <th>Bandera</th>
        <?php
            foreach ($continentes as $continente => $paises) {
                foreach ($paises as $pais => $datos) {
                    echo "<tr>";
                    echo "<td>" . $continente . "</td>";
                    echo "<td>" . $pais . "</td>";
                    echo "<td>" . $datos[0] . "</td>";
                    echo "<td>" . $datos[1] . "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
    <div class="ver_codigo">
        <button type="button"><a href="https://github.com/Feloje20/unidad_3/blob/main/array/ej_01_5.php">Ver código</a></button>
    </div>   
</body>
</html>