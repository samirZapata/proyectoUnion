<?php
    include 'modificarProductosLogica.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleForms.css">
    <title>Modificar Productos</title>
</head>
<body>
    <style>
        body{
            background-color: #EAEBEF;
        }
    </style>
    <form action="modificarProductosLogica.php" method="POST" class="form-register">
        <h4 align="center">Modificar Producto</h4>
        <input type="text" class="form-control mb-3 controls" name="id" placeholder="Id" >
        <input type="text" class="form-control mb-3 controls" name="nombre" placeholder="Nombre" >
        <input type="text" class="form-control mb-3 controls" name="descripcion" placeholder="Descripcion" >
        <input type="text" class="form-control mb-3 controls" name="cantidad" placeholder="cantidad" >
        <input type="text" class="form-control mb-3 controls" name="precio" placeholder="Precio" >

        <input type="submit" value="Modificar producto" class="botons" id="updBtn">
    </form>

</body>
</html>