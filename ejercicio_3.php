<?php
    /**
    * 3. Carga la fecha de nacimiento en variables y calcula la edad.
    @autor = Jesús Ferrer López
    @date 
    */

    // Adquirimos la fecha de nuestro dispositivo y la asignamos en una variable.
    $today_date = new DateTime();
    
    // Variablede fecha de nacimiento
    $birth_date = new DateTime('2001-08-04 00:00:00');

    // Calculamos la diferencia entre la fecha actual y la de nacimiento
    // date_diff devuelve un objeto DateInterval. 
    $diff = date_diff($birth_date, $today_date);

    /* Para representar la información debemos acceder a las propiedades del objeto 
    usando "$objeto->PropiedadObjeto". */
    echo 'Edad: ' . $diff->y . ' años, ' . $diff->m . ' meses, ' . $diff->d . ' días.';
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
    <div class="ver_codigo">
        <button type="button"><a href="https://github.com/Feloje20/unidad_3/blob/main/ejercicio_3.php">Ver código</a></button>
    </div>   
</body>
</html>