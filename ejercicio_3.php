<?php
    /**
    * 3. Carga la fecha de nacimiento en variables y calcula la edad.
    @autor = Jesús Ferrer López
    @date 
    */

    // Adquirimos la zona horaria del servidor y lo pasamos a una variable de fecha.
    $timezone = date_default_timezone_get(); 
    $today_date = date_create(date('Y-m-d H:i:s'));
    
    // Variablede fecha de nacimiento
    $birth_date = date_create('2000-08-04 00:00:00');

    // Calculamos la diferencia entre la fecha actual y la de nacimiento
    // date_diff devuelve un objeto DateInterval. 
    $diff = date_diff($birth_date, $today_date);

    /* Para representar la información debemos acceder a las propiedades del objeto 
    usando "$objeto->PropiedadObjeto". */
    echo 'Edad: ' . $diff->y . ' años, ' . $diff->m . ' meses, ' . $diff->d . ' días.';
?>