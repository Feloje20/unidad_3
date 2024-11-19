<?php
/** Ejercicio de repaso de formularios.
 * @author Jesús Ferrer López
 * @date 11/11/2024
 */
include "config/conf.php";
include "lib/functions.php";

//Incialización de variables
$nombre = $email = $genero = $comentarios = $url = $nivelIngles = "";

$cochesSeleccionados = array();
$vehiculosSeleccionados = array();
$coloresSeleccionados = array();

$lprocesaFormulario = false;
$errValidacion = false;

// Recogemos los datos del formulario
if (isset($_POST['enviar'])) {
    $lprocesaFormulario = true;

    // Recogemos los datos y limpiamos los campos de libre escritura.
    $nombre = cleardata($_POST['nombre']);
    $email = filter_Var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $comentarios = cleardata($_POST['comentarios']);
    $url = filter_var($_POST['url'], FILTER_SANITIZE_URL);

    // Validamos los datos recibidos
    if (empty($nombre)) {
        $aErrores['nombre'] = "El nombre es obligatorio";
        $errValidacion = true;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $aErrores['email'] = "El email no es válido";
        $errValidacion = true;
    }

    if (empty($url)) {
        $aErrores['url'] = "La url es obligatoria";
        $errValidacion = true;
    }

    if (empty($comentarios)) {
        $aErrores['comentarios'] = "Los comentarios son obligatorios";
        $errValidacion = true;
    }

    // Debemos comprobar si existe porque en caso de no ser seleccionado, no existe la variable
    if (!isset($_POST['genero'])) {
        $aErrores['genero'] = "El género es obligatorio";
        $errValidacion = true;
    } else {
        $genero = $_POST['genero'];
    }

    if (!isset($_POST['coches'])) {
        $aErrores['coches'] = " Debes seleccionar al menos un coche";
        $errValidacion = true;
    } else {
        $cochesSeleccionados = $_POST['coches'];
    }

    if (!isset($_POST['vehiculos'])) {
        $aErrores['vehiculos'] = " Debes seleccionar al menos un vehículo";
        $errValidacion = true;
    } else {
        $vehiculosSeleccionados = $_POST['vehiculos'];
    }

    if (!isset($_POST['colores'])) {
        $aErrores['colores'] = " Debes seleccionar al menos un color";
        $errValidacion = true;
    } else {
        $coloresSeleccionados = $_POST['colores'];
    }

    if (!isset($_POST['nivelIngles'])) {
        $aErrores['nivelIngles'] = " Debes seleccionar un nivel de inglés";
        $errValidacion = true;
    } else {
        $nivelIngles = $_POST['nivelIngles'];
    }

    // Si ha habido un error de validación, se impide el procesamiento del formulario.
    if ($errValidacion) {
        $lprocesaFormulario = false;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Formulario ej guiado repaso</h1>
    <?php if ($lprocesaFormulario) {
        echo "<h2>Datos enviados</h2>";
        echo "Nombre: $nombre <br/>";
        echo "Email: $email <br/>";
        echo "URL: $url <br/>";
        echo "Comentarios: $comentarios <br/>";
        echo "Género: $genero <br/>";
        echo "Coches: ";
        foreach ($cochesSeleccionados as $coche) {
            echo "$coche ";
        }
        echo "<br/>";
        echo "Vehículos: ";
        foreach ($vehiculosSeleccionados as $vehiculo) {
            echo "$vehiculo ";
        }
        echo "<br/>";
        echo "Colores: ";
        foreach ($coloresSeleccionados as $color) {
            echo "$color ";
        }
        echo "Nivel de inglés: $nivelIngles";
    } else { 
    ?>
    <form method="post" action="">
        <!-- nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre?>"><span class="error"><?php echo $aErrores["nombre"]?></span><br/>
        <!-- email -->
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email?>"><span class="error"><?php echo $aErrores["email"]?></span><br/>
        <!-- URL -->
        <label for="url">URL:</label>
        <input type="text" name="url" value="<?php echo $url?>"><span class="error"><?php echo $aErrores["url"]?></span><br/>
        <!-- comentarios -->
        <label for="email">Comentarios:</label>
        <textarea name="comentarios" rows="2" cols="20"><?php echo $comentarios?></textarea><span class="error"><?php echo $aErrores["comentarios"]?></span><br/>
        <!-- Género -->
        <fieldset>
            <legend>Género</legend>
            <?php
            foreach ($aGenero as $eGenero) {
                $isChecked = $eGenero === $genero ? "checked" : "";
                echo "<input type='radio' name='genero' value='$eGenero' $isChecked/>$eGenero";
            }
            ?>
        </fieldset><span class="error"><?php echo $aErrores["genero"]?></span><br/>
        <!-- Coches -->
        <label>Coches:</label>
        <?php
        foreach ($aCoches as $coche) {
            $isChecked = in_array($coche, $cochesSeleccionados) ? "checked" : "";
            echo "<input type='checkbox' name='coches[]' value='$coche' $isChecked/>$coche";
        }
        ?><span class="error"><?php echo $aErrores["coches"]?></span><br/>
        <!-- Vehículos -->
        <label>Vehiculos:</label>
        <?php
        foreach ($aVehiculos as $vehiculo) {
            $isChecked = in_array($vehiculo, $vehiculosSeleccionados) ? "checked" : "";
            echo "<input type='checkbox' name='vehiculos[]' value='$vehiculo' $isChecked/>$vehiculo";
        }
        ?><span class="error"><?php echo $aErrores["vehiculos"]?></span><br/>
        <!-- Colores -->
        <label>Colores:</label>
        <select name="colores[]" multiple>
            <?php
            foreach ($aColores as $clave => $valor) {
                foreach ($valor as $color => $valor2) {
                    if ($color != "codigo") {
                        $isSelected = in_array($valor2, $coloresSeleccionados) ? "selected" : "";
                        echo "<option value='$valor2' $isSelected> $valor2</option>";
                    }
                }
            }
            ?>
        </select><span class="error"><?php echo $aErrores["colores"]?></span><br/>
        <!-- NivelIngles -->
        <label>Nivel de inglés:</label>
        <select name="nivelIngles">
            <option value="" disabled selected>Seleccione su nivel</option>
            <?php
            foreach ($aNivelIngles as $clave) {
                $isSelected = ($clave === $nivelIngles) ? "selected" : "";
                echo "<option value='$clave' $isSelected> $clave</option>";
            }
            ?>
        </select><span class="error"><?php echo $aErrores["nivelIngles"]?></span><br/>
        <!-- Botones -->
        <input type="submit" name="enviar" value="enviar"/>
        <input type="submit" name="reiniciar" value="reiniciar"/>
    </form>
    <?php } ?>
</body>
</html>