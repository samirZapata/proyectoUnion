<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleForms.css">
    <title>Registrar Descuentos</title>
</head>
<body>

    <form action="registrarDescuentosLogica.php" method="POST" class="form-register">
        <h4 align="center">Registrar Descuentos</h4>
        <input type="text" class="form-control mb-3 controls" name="id" placeholder="ID" >
        <input type="text" class="form-control mb-3 controls" name="producto" placeholder="ID Producto" >
        <input type="text" class="form-control mb-3 controls" name="precio" placeholder="Nuevo precio" >
        <input type="text" class="form-control mb-3 controls" name="fechaI" placeholder="Fecha inicio" >
        <input type="text" class="form-control mb-3 controls" name="fechaF" placeholder="Fecha final" >

        <input type="submit" value="Registrar ingresos" class="botons">
    </form>

</body>
</html>