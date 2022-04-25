<?php
    include 'conexion.php';
    $consulta = "SELECT * FROM datos";
    $consulta = $con->query($consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Usuarios</title>
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
            <h3 class="text-center">Usuarios</h3>
            <div class="table-responsive table-hover" id="tConsulta">
                <table class="table">
                    <thead class="text-muted">
                        <tr>
                            <th class="text-center texto">ID</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Tipo Usuario</th>
                            <th class="text-center">clave</th>
                            <th class="text-center">ID Perfil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($fila = $consulta->fetch_assoc()){
                                echo "<tr>";
                                echo "<td class='text-center'>".$fila['id']."</td>";
                                echo "<td class='text-center'>".$fila['nombre']."</td>";
                                echo "<td class='text-center'>".$fila['usuario']."</td>";
                                echo "<td class='text-center'>".$fila['clave']."</td>";
                                echo "<td class='text-center'>".$fila['id_perfil']."</td>";
                                echo "<td class='text-center'>
                                        <a href='modificarUsuarios.php?id=".$fila['id']."' class='btn btn-warning'>Editar</a>
                                        <a href='eliminarUsuarios.php?id=".$fila['id']."' class='btn btn-danger'>Eliminar</a>
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



