<?php
    /**
    * 2. Funcionalidad: Carga en variables mes y año e indica el número de días del mes.
    @autor = Jesús Ferrer López
    @date 
    */
    $month = "abril";
    $year = "2024";

    switch ($month) {
        case "enero":
        case "marzo":
        case "mayo":
        case "julio":
        case "agosto":
        case "octubre":
        case "diciembre":
            echo "$month tiene 31 días";
            break;
        case "abril":
        case "junio":
        case "septiembre":
        case "noviembre":
            echo "$month tiene 30 días";
            break;
        case "febrero":
            if ((($year % 4 == 0) && ($year % 100 != 0)) or ($year % 400 == 0)) {
                echo "$month tiene 29 días";
            }
            else {
                echo "$month tiene 28 días";
            }
            break;
    }
?>