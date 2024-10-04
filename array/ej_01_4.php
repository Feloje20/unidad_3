<?php
/**
* 1.4 Verbos irregulares en inglés.
* @author Jesús Ferrer López
* @date 02/10/2024
*/

// Inicializamos el array
$irrverb_ingles = [
    "be" => ["past" => "was/were","participle" => "been"],
    "read" => ["past" => "red","participle" => "red"],
    "become" => ["past" => "became","participle" => "become"],
    "break" => ["past" => "broke","participle" => "broken"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 4 php</title>
    <style>
        .ver_codigo {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <table border="1">
        <th>Verbo</th>
        <th>Pasado</th>
        <th>Participio</th>
        <?php
            foreach ($irrverb_ingles as $verbo => $tiempos) {
                echo "<tr>";
                echo "<td>" . $verbo . "</td>";
                echo "<td>" . $tiempos["past"] . "</td>";
                echo "<td>" . $tiempos["participle"] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <div class="ver_codigo">
        <button type="button"><a href="https://github.com/Feloje20/unidad_3/blob/main/array/ej_01_4.php">Ver código</a></button>
    </div>   
</body>
</html>