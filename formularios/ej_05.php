<?php
    /**
     * 5. Uso de formularios para sumar números.
     * @autor Jesús Ferrer López	
     * @date 15/10/2024
     */
    $lprocesaformulario = false;
    $lprocesaformulariosuma = false;
    $numSumar;  // Cantidad de números a sumar
    $totalSuma; // Guarda el total de la suma
    $numerosSumados = [];  // Cadena que muestra los números sumados.

    if((isset($_POST["enviar"]))){
        $lprocesaformulario = true;
    }

    if((isset($_POST["sumar"]))){
        $lprocesaformulario = true;
        $lprocesaformulariosuma = true;
    }

    if ($lprocesaformulario){
        // Recoger datos
        if ($lprocesaformulariosuma) {
            foreach($_POST as $valor => $clave) {
                if (is_numeric($clave)) {
                    if ($valor == "numerossumar") {
                        $numSumar = $clave;
                    } 
                    else {
                        $totalSuma += $clave;
                        array_push($numerosSumados, $clave);
                    }
                }
            }          
        }
        else {
            $numSumar = $_POST["numerossumar"];
            if ($numSumar <= 1) {
                echo "No es posible sumar 1 o menos números";
                $lprocesaformulario = false;
            }
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
    <h1> Formularios | Suma de números</h1>
    <form action="" method="post">
        <label>Cantidad de números a sumar: </label>
        <input type="number" name="numerossumar" value="<?php echo $numSumar?>"><br/>
        <?php 
            if ($lprocesaformulario) {
                if ($lprocesaformulariosuma){
                    for($i = 1; $i <= $numSumar; $i++) {
                        $aux = $numerosSumados[$i-1];
                        echo "n$i<input type='number' name='n$i' value='$aux'><br/>";
                    }
                }
                else {
                    for($i = 1; $i <= $numSumar; $i++) {
                        echo "n$i<input type='number' name='n$i'><br/>";
                    }
                }
        ?>
        <input type="submit" name="sumar">
        <?php
            } 
            else {
        ?>
        <input type="submit" name="enviar">
        <?php
        }
        ?>
        <input type="reset" name="resetear"><br/>
        <?php
            if ($lprocesaformulariosuma) {
                    echo "<h2>El resultado es: $totalSuma</h2>";
                }
        ?>
    </form>
</body>
</html>