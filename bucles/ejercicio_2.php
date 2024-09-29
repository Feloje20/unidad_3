<?php
    /**
    * 2. Sumar los tres primeros números pares.
    @autor = Jesús Ferrer López
    @date 
    */

    $cantidad_pares = 0;    // La cantidad de números pares que se lleva en ese momento.
    $pares_objetivo = 3;    // Cuantos números pares vamos a sumar
    $total_suma = 0;        // Variable que guarda el valor de la suma total
    $numero_par_actual = 2; // El primer número par es 2.

    while ($cantidad_pares < $pares_objetivo) {  
        $total_suma += $numero_par_actual;
        $numero_par_actual+=2;
        $cantidad_pares++;
    }

    echo "La suma de los primeros $pares_objetivo números pares es $total_suma";
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
    <div class="ver_codigo">
        <button type="button"><a href="https://github.com/Feloje20/unidad_3/blob/main/bucles/ejercicio_2.php">Ver código</a></button>
    </div>   
</body>
</html>