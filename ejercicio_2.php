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