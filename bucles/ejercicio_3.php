<?php
    /**
    * 3. Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas.
    @autor = Jesús Ferrer López
    @date 
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 3 php</title>
    <style>
        .ver_codigo {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Tablas de multiplicar 1 al 10</h1>
    <div>
    <table border="1">
        <thead>
            <tr>
                <?php 
                echo "<th>X</th>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
                for ($i = 1; $i <= 10; $i++) {

                    echo "<tr>";
                    echo "<td>$i</td>";
                    for ($j = 1; $j <= 10; $j++) {
                        $multiplicacion = $i*$j;
                        echo "<td>$multiplicacion</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </div>
    <div class="ver_codigo">
        <button type="button"><a href="">Ver código</a></button>
    </div>   
</body>