<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>
    <link rel='stylesheet' href="css/estilos.css">
    <title>Login</title>
</head>

<body>
    <form action="validarLogin.php" method="post" class="formulario">

        <h1>Login</h1>
        <div class="contenedor">


            <div class="inputContenedor">

                <i class='bx bxs-id-card'></i>
                <input type="text" placeholder="Usuario" name="cusu">

            </div>
            <div class="inputContenedor">

                <i class='bx bxs-lock-alt'></i>
                <input type="password" placeholder="Contraseña" name="cclave">

            </div>
            <input type="submit" value="Login" class="button" name="Login">
            <p>¿No tienes cuenta? <a class="link" href="registro.php">Crear Cuenta</a></p>
        </div>
    </form>
</body>

</html>