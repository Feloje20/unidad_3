<?php
/** Script con las funciones generales de nuestro proyecto
 * @autor Jesús Ferrer López
 * @date 11/11/2024
 */

/**
 * Función que limpia los datos de entrada
 * @param mixed $data
 * @return string
 */
function clearData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>