<?php
/**
* 1.1 El programa proporciona un array que almacena los meses del año.
* @author Jesús Ferrer López
* @date 02/10/2024
*/

$meses = array(
    "Enero" => 31,
    "Febrero" => array(28, 29),
    "Marzo" => 31,
    "Abril" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre" => 31
);

foreach ($meses as $clave=>$valor) {
    if ($clave === "Febrero") {
	echo "$clave tiene $valor[0] o $valor[1] días <br>";
    }
    else {
	echo "$clave tiene $valor dias <br>";
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 1 php</title>
    <style>
        .ver_codigo {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="ver_codigo">
        <button type="button"><a href="">Ver código</a></button>
    </div>   
</body>
</html>
