<?php
/**
* 1.3 Nota de los alumnos para DWES. Es un array de ejemplo de como se podría hacer.
* @author Jesús Ferrer López
* @date 02/10/2024
*/

// Inicializamos el array
$alumnos_nota_dwes = array (
    array ("nombre" => "Jesús", "apellidos" => ["Ferrer", "López"], "Foto" => "foto.png", "nota" => 10),
    array ("nombre" => "Maria", "apellidos" => ["Castillo", "López"], "Foto" => "foto.png", "nota" => 8),
    array ("nombre" => "Alvaro", "apellidos" => ["Manchado", "Paredes"], "Foto" => "foto.png", "nota" => 6),
    array ("nombre" => "Lucía", "apellidos" => ["Ronaldo", "López"], "Foto" => "foto.png", "nota" => 4)
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 1.3 php</title>
    <style>
        .ver_codigo {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <table border="1">
        <th>nombre</th>
        <th>apellido1</th>
        <th>apellido2</th>
        <th>foto</th>
        <th>nota</th>
        <?php
            foreach ($alumnos_nota_dwes as $alumno) {
                echo "<tr>";
                echo "<td>" . $alumno["nombre"] . "</td>";
                echo "<td>" . $alumno["apellidos"][0] . "</td>";
                echo "<td>" . $alumno["apellidos"][1] . "</td>";
                echo "<td>" . $alumno["Foto"] . "</td>";
                echo "<td>" . $alumno["nota"] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <div class="ver_codigo">
        <button type="button"><a href="">Ver código</a></button>
    </div>   
</body>
</html>
