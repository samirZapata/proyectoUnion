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

        .drop-area{
            font-family: 'poppins', 'sans-serif';
            border: 3px dashed #ddd;
            height: 200px;
            width: 340px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
         h2{  
            color: #2196F3;
            font-size: 1rem;
            font-family: 'Varela Round', 'sans-serif';
            margin: auto;
        }   
        .drop-area.active{
            background-color: green;
            color: black;
            border: 3px dashed #2196F3;
        }

        .drop-area button{
            padding: 10px 25px;
            font-size: 12px;
            border: 0;
            outline: none;
            background-color: #2196F3;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin:20px 0;
            margin-left: 20px;
        }
        .drop-area button:hover{
            background-color: #5DADE2;
            color: white;
        }
        .file-container{
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border: solid 1px #ddd;
        }
        #preview{
            margin-top: 10px;
        }

        .status-text{
            padding: 0 10px;
        }
        .success{
            color: #52ad5a;
        }
        .failure{
            color: #ff0000;
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
    <form action="registrarProductoLogica.php" method="POST" class="form-register">
        <h4 align="center">Registrar Producto</h4>
        <input type="text" class="form-control mb-3 controls" name="id" placeholder="Id" required>
        <input type="text" class="form-control mb-3 controls" name="nombre" placeholder="Nombre" required >
        <input type="text" class="form-control mb-3 controls" name="descripcion" placeholder="Descripcion" required>
        <input type="text" class="form-control mb-3 controls" name="cantidad" placeholder="cantidad" required>
        <input type="text" class="form-control mb-3 controls" name="precio" placeholder="Precio" required>

        <input type="submit" value="Registrar producto" class="botons">

        <div class="drop-area"> 
        <h2>
            Arrastra y suelta los archivos
            <p align="center">O</p>
            <button>Selecciona tus archivos</button>
            <input type="file" name="" id="input-file" hidden multiple>
        </h2>
    </div>
    <div class="preview"></div>
    </form>

    
    <script src="js/index.js"></script>
</body>
</html>