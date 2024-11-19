<?php
    /**
     * 3. Formulario de curriculum con diferentes inputs.
     * @autor Jesús Ferrer López	
     * @date 14/10/2024
     */
    $lprocesaformulario = false;
    $nombre = "";
    $apellidos = "";
    $email = "";
    $curso = "";
    $idioma = "";
    $buscaTrabajo = "";
    $lenguaje = "";

    if((isset($_POST["enviar"]))){
        $lprocesaformulario = true;
    }

    if ($lprocesaformulario){
        // Recoger datos
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $curso = $_POST["curso"];
        $idioma = $_POST["idiomas"];
        if (isset($_POST["buscaTrabajo"])) {
            $buscaTrabajo = $_POST["buscaTrabajo"];
        }
        $lenguaje = $_POST["lenguaje_fav"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $lprocesaformulario = false;
        } 
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
        echo "Nombre: $nombre <br/>";
        echo "Apellidos: $apellidos <br/>";
        echo "email: $email <br/>";
        echo "curso: $curso <br/>";
        echo "idioma: $idioma <br/>";
        if ($buscaTrabajo) {echo "Es demandante de empleo. <br/>";}
        echo "lenguaje: $lenguaje <br/>";
    } else {
    ?>
    <h1> Curriculum personal</h1>
    <form action="" method="post">
        <input type="text" placeholder="nombre" name="nombre" value="<?php echo $nombre?>" id=""><br/>
        <input type="text" placeholder="apellidos" name="apellidos" value="<?php echo $apellidos?>" id=""><br/>
        <input type="text" placeholder="email" name="email" value="<?php echo $email?>" id=""><br/>
        <select name="curso">
            <option>1ºDAW</option>
            <option>2ºDAW</option>
            <option>Big data</option>
        </select><br/>
        <label for="idiomas">Tus idiomas</label>
        <select name="idiomas" multiple>
            <option>Español</option>
            <option>Alemán</option>
            <option>Inglés</option>
        </select><br/>
        <label for="buscaTrabajo">¿Buscas trabajo?</label>
        <input type="checkbox" name="buscaTrabajo" value="buscaTrabajo"><br/>
        <fieldset>
            <legend>Lenguaje favorito</legend>
            <input type="radio" name="lenguaje_fav" value="js" checked>Java script
            <input type="radio" name="lenguaje_fav" value="Python">Python
            <input type="radio" name="lenguaje_fav" value="C">C++
            <input type="radio" name="lenguaje_fav" value="Kobold">Kobold
        </fieldset><br/>
        <input type="submit" name="enviar" value="enviar formulario">
        <input type="reset" name="resetear" value="resetear">
    </form>
    <?php
    }
    ?>
    <div class="ver_codigo">
        <button type="button"><a href="https://github.com/Feloje20/unidad_3/blob/main/formularios/ej_03.php">Ver código</a></button>
    </div>   
</body>
</html>