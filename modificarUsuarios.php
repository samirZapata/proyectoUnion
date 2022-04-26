<?php
    include 'conexion.php';
    include 'modificarUsuariosLogica.php';
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
    <title>Modificar Usuarios</title>
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
    <form action="modificarUsuarios.php" method="POST" class="form-register">
        
        <h4 align="center">Modificar Usuarios</h4>
        <input type="text" class="form-control mb-3 controls" name="id" placeholder="Id" value="<?php echo $id ?>">
        <input type="text" class="form-control mb-3 controls" name="nombre" placeholder="Nombre" value="<?php echo $nombre ?>" required>
        <input type="text" class="form-control mb-3 controls" name="usuario" placeholder="Tipo Usuario" value="<?php echo $usuario ?>" required>
        <input type="text" class="form-control mb-3 controls" name="clave" placeholder="Clave" value="<?php echo $clave ?>" required>
        <input type="text" class="form-control mb-3 controls" name="id_perfil" placeholder="ID perfil" value="<?php echo $id_perfil ?>" required>
        

        <input type="submit" value="Modificar Usuarios" class="botons" id="updBtn">
    </form>

</body>
</html>