<?php
    include 'conexion.php';
    include 'eliminarVentasLogica.php';
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
    <title>Eliminar Ventas</title>
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

    <form action="eliminarVentasLogica.php" method="POST" class="form-register">
        <h4 align="center">Eliminar Ventas</h4>
        <input type="text" class="form-control mb-3 controls" name="id" placeholder="Id" value="<?php echo $id ?>">
        <input type="text" class="form-control mb-3 controls" name="id_producto" placeholder="ID Producto" value="<?php echo $id_producto ?>" required>
        <input type="text" class="form-control mb-3 controls" name="id_cliente" placeholder="ID Cliente" value="<?php echo $id_cliente ?>" required>
        <input type="text" class="form-control mb-3 controls" name="cantidad" placeholder="Cantidad" value="<?php echo $cantidad ?>" required>
        <input type="text" class="form-control mb-3 controls" name="fecha" placeholder="Fecha" value="<?php echo $fecha ?>" required>
        <input type="text" class="form-control mb-3 controls" name="total" placeholder="Precio" value="<?php echo $total ?>" required>

        <input type="submit" value="Eliminar Ventas" class="botons" id="delBtn">
    </form>

</body>
</html>