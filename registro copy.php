<?php
include("conexion.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>
    <link rel='stylesheet' href="diseños/estilos.css">
    <title>Login</title>



</head>

<body>
    <form action="logicaRegistro.php" method="POST" class="formulario">

        <h1>Registrate</h1>
        <div class="contenedor">

            <div class="inputContenedor">

                <i class='bx bxs-id-card'></i>
                <input type="text" placeholder="Cedula" name="cedulaRegistro">

            </div>
            <div class="inputContenedor">

                <i class='bx bx-male'></i>
                <input type="text" placeholder="Nombre Completo" name="nombreRegistro">

            </div>
            <div class="inputContenedor">

                <i class='bx bx-rename'></i>
                <input type="text" placeholder="Nombre Usuario" name="usuarioRegistro">

            </div>

            <div class="inputContenedor">

                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Contraseña" name="contraseñaRegistro">

            </div>
            <input type="submit" value="Registrate" class="button">
            <p>¿Ya tienes cuenta? <a class="link" href="index.php">Iniciar Sesion</a></p>
        </div>
    </form>
</body>

</html>