<?php
    /**
    * 2. Funcionalidad: Carga en variables mes y año e indica el número de días del mes.
    @autor = Jesús Ferrer López
    @date 
    */
    $month = "abril";
    $year = "2024";
    $numdays = 0;

    switch ($month) {
        case "enero":
        case "marzo":
        case "mayo":
        case "julio":
        case "agosto":
        case "octubre":
        case "diciembre":
            $numdays = 31;
            break;
        case "abril":
        case "junio":
        case "septiembre":
        case "noviembre":
            $numdays = 30;
            break;
        case "febrero":
            if ((($year % 4 == 0) && ($year % 100 != 0)) or ($year % 400 == 0)) {
                $numdays = 29;
            }
            else {
                $numdays = 28;
            }
            break;
    }

    echo "$month tiene $numdays días";
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
        <button type="button"><a href="https://github.com/Feloje20/unidad_3/blob/main/ejercicio_2.php">Ver código</a></button>
    </div>   
</body>
</html>