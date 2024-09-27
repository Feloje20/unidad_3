<?php
    /**
    * 5. Script que muestre una lista de enlaces en función del perfil de usuario:
    *    Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
    *    Perfil Usuario: Pagina1, Pagina2
    @autor = Jesús Ferrer López
    @date 
    */

    // Variable que almacena el perfil de usuario actual
    $user_profile = "admin"; // admin / user

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 5 php</title>
</head>
<body>
    <?php if ($user_profile == "user"): ?>
        <p>Conectado como usuario</p>
        <a href="#">Página 1</a>
        <a href="#">Página 2</a>
    <?php elseif ($user_profile == "admin"): ?>
        <p>Conectado como admin</p>
        <a href="#">Página 1</a>
        <a href="#">Página 2</a>
        <a href="#">Página 3</a>
        <a href="#">Página 4</a>
    <?php endif; ?>
</body>
</html>