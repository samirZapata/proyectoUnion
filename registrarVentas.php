<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleForms.css">
    <title>Registrar Ventas</title>
</head>
<body>
<style>
        body{
            background-color: #EAEBEF;
        }
    </style>

    <form action="registrarVentasLogica.php" method="POST" class="form-register">
        <h4 align="center">Registrar Ventas</h4>
        <input type="text" class="form-control mb-3 controls" name="id" placeholder="ID" >
        <input type="text" class="form-control mb-3 controls" name="producto" placeholder="ID Producto" >
        <input type="text" class="form-control mb-3 controls" name="cliente" placeholder="ID Cliente" >
        <input type="text" class="form-control mb-3 controls" name="cantidad" placeholder="Cantidad" >
        <input type="text" class="form-control mb-3 controls" name="fecha" placeholder="Fecha" >
        <input type="text" class="form-control mb-3 controls" name="total" placeholder="Total" >

        <input type="submit" value="Registrar ventas" class="botons">
    </form>

</body>
</html>