<?php
    /**
    * 4. Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor
    * hexadecimal que le corresponde.
    @autor = Jesús Ferrer López
    @date 
    */

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
    <?php
    for ($r = 0; $r <= 255; $r += 17) { 
        echo "<tr>";
        for ($g = 0; $g <= 255; $g += 17) { 
            for ($b = 0; $b <= 255; $b += 17) {
                /*
                sprintf es una cadena con formato. # Al inicio se pone literalmente igual.
                Cada % representa una referencia a las variables que se van a usar después de la cadena.
                El 0 indica que el número se rellena con 0s a la izquierda.
                El 2 indica la longitud del número.
                X convierte el número decimal en hexadecimal con las letras en mayúsculas.
                */
                $hexColor = sprintf("#%02X%02X%02X", $r, $g, $b);
                echo "<td><div class='color-box' style='background-color: $hexColor;'>$hexColor</div></td>";
            }
        }
        echo "</tr>";
    }
    ?>
    </table>
    <div class="ver_codigo">
        <button type="button"><a href="https://github.com/Feloje20/unidad_3/blob/main/bucles/ejercicio_4.php">Ver código</a></button>
    </div>   
</body>
</html>