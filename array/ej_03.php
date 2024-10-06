<?php
    /**
    * 3. Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de
    * ellos. El resultado debe mostrar nombre y fotografía.
    * @author Jesús Ferrer López
    * @date 06/10/2024
    */

    // Inicializamos el array. Las imágenes se pueden cambiar, son un ejemplo.
    $alumnos = [
        'Raúl Bermúdez González' => './img/platano.jpg', 
        'Carlos Borreguero Redondo' => './img/manzana.jpg', 
        'Álvaro Cañas González' => './img/pear.jpg', 
        'Miguel Carmona Cicchetti' => './img/platano.jpg', 
        'Alejandro Carrasco Castellano' => './img/manzana.jpg', 
        'Mostafa Cherif Mouaki Almabouada' => './img/pear.jpg', 
        'Alejandro Coronado Ortega' => './img/platano.jpg', 
        'Juan Diego Delgado Morente' => './img/manzana.jpg', 
        'Marlon Jafet Escoto García' => './img/pear.jpg', 
        'Ángel Fernández Ariza' => './img/platano.jpg', 
        'Alejandro Fernández Arrayás' => './img/manzana.jpg', 
        'Daniel Fernández Balsera' => './img/pear.jpg', 
        'Jesús Ferrer López' => './img/platano.jpg', 
        'Jesús Frías Rojas' => './img/manzana.jpg', 
        'Manuel Galán Navas' => './img/pear.jpg', 
        'Víctor García Báez' => './img/platano.jpg', 
        'Lucía García Díaz' => './img/manzana.jpg', 
        'Adrián González Martínez' => './img/pear.jpg', 
        'Jesús López Funes' => './img/platano.jpg', 
        'Enrique Mariño Jiménez' => './img/manzana.jpg',
        'Oscar Martín-Castaño Carrillo' => './img/pear.jpg', 
        'José María Mayén Pérez' => './img/platano.jpg',
        'Pablo Mérida Velasco' => './img/manzana.jpg', 
        'Héctor Mora Sánchez' => './img/pear.jpg',
        'Luis Pérez Cantarero' => './img/platano.jpg', 
        'Carlos Romero Romero' => './img/manzana.jpg',
        'Javier Ruiz Molero' => './img/pear.jpg', 
        'Alejandro Vaquero Abad' => './img/platano.jpg',
        'Luis Miguel Villén Moyano' => './img/manzana.jpg'
      ];

    // Seleccionamos un alumno aleatorio
    $alumno = array_rand($alumnos); 
    $foto = $alumnos[$alumno];

    // Mostramos el nombre y la foto
    echo "<h1>$alumno</h1>";
    echo "<img src='$foto' alt='Foto de $alumno' width='200px' height='200px'>";
?>