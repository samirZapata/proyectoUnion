<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleForms.css">
    <title>Registrar Productos</title>
</head>
<body>
<style>
        body{
            background-color: #EAEBEF;
        }
    </style>


<?php if (isset($_GET['error'])) { ?>
            <p class='error'> <?php echo $_GET['error']; ?></p>
        <?php
}?>

        <?php if (isset($_GET['save'])) { ?>
            <p class='save' align="center"> <?php echo $_GET['save']; ?></p>
        <?php
}?>

    <form action="registrarClientesLogica.php" method="POST" class="form-register">
        <h4 align="center">Registrar Clientes</h4>
        <input type="text" class="form-control mb-3 controls" name="id" placeholder="Cedula" >
        <input type="text" class="form-control mb-3 controls" name="nombre" placeholder="Nombre" >
        <input type="text" class="form-control mb-3 controls" name="apellido" placeholder="Apellidos" >
        <input type="text" class="form-control mb-3 controls" name="direccion" placeholder="Dirección" >
        <input type="text" class="form-control mb-3 controls" name="telefono" placeholder="Telefono" >
        <input type="text" class="form-control mb-3 controls" name="email" placeholder="E-mail" >
        <input type="submit" value="Registrar clientes" class="botons">
    </form>

</body>
</html>