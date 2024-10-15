<?php
    /**
     * 4. Formulario de selección de pais.
     * @autor Jesús Ferrer López	
     * @date 14/10/2024
     */
    $lprocesaformulario = false;
    $paises = [
        "Spain" => ["Madird", "./img/spain.jpg"],
        "Alemania" => ["Berlin", "./img/alemania.png"],
        "Portugal" => ["Lisboa", "./img/portugal.jpg"]
    ];
    $nombrePais = "";
    $datosPais;

    if((isset($_POST["enviar"]))){
        $lprocesaformulario = true;
    }

    if ($lprocesaformulario){
        // Recoger datos
        $nombrePais = $_POST["country"];
        $datosPais = $paises[$_POST["country"]];
    }
?>
<!-- VISTA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($lprocesaformulario) {
        // Mostrar datos
        echo "<h1>$nombrePais</h1>";
        echo "capital:  $datosPais[0]<br>";
        echo "<img src=$datosPais[1] width='250' height='250'>";
    } else {
    ?>
    <h1> Formulario paises</h1>
    <form action="" method="post">
        <select name="country">
            <option>Spain</option>
            <option>Alemania</option>
            <option>Portugal</option>
        </select><br/>
        <input type="submit" name="enviar" value="enviar formulario">
        <input type="reset" name="resetear" value="resetear">
    </form>
    <?php
    }
    ?>
    <div class="ver_codigo">
        <button type="button"><a href="https://github.com/Feloje20/unidad_3/blob/main/formularios/ej_04.php">Ver código</a></button>
    </div>   
</body>
</html>