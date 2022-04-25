<?php
    include 'conexion.php';
    include 'modificarDescuentosLogica.php';
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
    <form action="modificarDescuentos.php" method="POST" class="form-register">
        <h4 align="center">Modificar Descuentos</h4>
        <input type="text" class="form-control mb-3 controls" name="id" placeholder="ID" value="<?php echo $id ?>">
        <input type="text" class="form-control mb-3 controls" name="id_producto" placeholder="ID Producto" value="<?php echo $idProducto ?>" required>
        <input type="text" class="form-control mb-3 controls" name="cantidad" placeholder="Cantidad" value="<?php echo $cantidad ?>" required>
        <input type="text" class="form-control mb-3 controls" name="fechaInicio" placeholder="Fecha Inicio" value="<?php echo $fechaI ?>" required>
        <input type="text" class="form-control mb-3 controls" name="fechaFin" placeholder="Fecha Fin" value="<?php echo $fechaF ?>" required>

        <input type="submit" value="Modificar Descuento" class="botons" id="updBtn">
    </form>

</body>
</html>