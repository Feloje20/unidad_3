<?php
    /**
     * Días de la semana
     * @autor = Jesús Ferrer López 
     * @date = 01/10/2024
     */

    // Carga en un Array los días de la semana
    $diasSemana = arry("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
    //Calculamos el tamaño del array
    $num_dias = count($diasSemana);

    for($i = 0; $i < $num_dias; $i++) {
        echo $diasSemana[$i] . "\n";
    }

?>