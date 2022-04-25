<?php
    include 'conexion.php';
    $consulta = "SELECT * FROM productos";
    $consulta = $con->query($consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Productos</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="css/styleForms.css">
</head>
<body>

    <style>
        .container{
            background-color: #f6f6f6;
            border-radius: 10px;
            padding: 20px;
            margin-top: 80px;
        }
    </style>

    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h3 class="text-center">Productos</h3>
            <div class="table-responsive table-hover" id="tConsulta">
                <table class="table">
                    <thead class="text-muted">
                        <tr>
                            <th class="text-center texto">ID</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($fila = $consulta->fetch_assoc()){
                                echo "<tr>";
                                echo "<td class='text-center'>".$fila['id']."</td>";
                                echo "<td class='text-center'>".$fila['nombre']."</td>";
                                echo "<td class='text-center'>".$fila['descripcion']."</td>";
                                echo "<td class='text-center'>".$fila['cantidad']."</td>";
                                echo "<td class='text-center'>".$fila['precio']."</td>";
                                echo "<td class='text-center'>
                                        <a href='modificarProducto.php?id=".$fila['id']."' class='btn btn-warning'>Editar</a>
                                        <a href='eliminarProductos.php?id=".$fila['id']."' class='btn btn-danger'>Eliminar</a>
                                    </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>



<!-- 
    FUNCIONAL



    <div class="row">
            <div class="col-md-12">
                <h1>Ver Productos</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!?php
                            $sql = "SELECT * FROM productos";
                            $conn = mysqli_connect("localhost", "root", "", "practica");
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>".$row["id"]."</td>";
                                    echo "<td>".$row["nombre"]."</td>";
                                    echo "<td>".$row["descripcion"]."</td>";
                                    echo "<td>".$row["cantidad"]."</td>";
                                    echo "<td>".$row["precio"]."</td>";
                                    echo "<td><a href='modificarProducto.php?id=".$row["id"]."' class='btn btn-primary'>Modificar</a>";
                                    echo "<a href='eliminarProducto.php?id=".$row["id"]."' class='btn btn-danger'>Eliminar</a></td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
 -->