<?php 
    include 'config.php';
    include 'db.php';
    $db = new Database();
    $con = $db->conectar();

    //VERIFICAMOS SI EL DATO QUE ENVIAMOS ESTA DEFINIDO
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $token = isset($_GET['token']) ? $_GET['token'] : '';

    //VALIDAMOS AMBOS DATOS
    if ($id == '' || $token == '') {
        echo 'Error al procesar la petición';
        exit;
    } else{
        //SI EL TOKEN ES CORRECTO PROCESAMOS LA PETICION
        $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
        //VALIDAMOS SI EL TOKEN QUE EL USER ME ENVIA ES IGUAL AL QUE GENERAMOS
        if($token == $token_tmp){

            //VERIFICAMOS SI EL ID QUE ENVIA EL USER EXISTE
            $sql = $con->prepare("SELECT count(id) FROM productos WHERE id = ?");
            $sql->execute([$id]);

            if ($sql->fetchColumn() > 0) {
                
                $sql = $con->prepare("SELECT nombre, descripcion, precio FROM productos WHERE id = ?");
                $sql->execute([$id]);
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                $nombre = $row['nombre'];
                $descripcion = $row['descripcion'];
                $precio = $row['precio'];

                //PARA AGREGAR DESCUENTO SOLAMENTE CREAR UNA COLUMNA EN LA TABLA PRODUCTOS Y AGREGARLO A LA CONSULTA DE ARRIBA
                //$descuento = $row['descuento'];
                //$precio_descuento = $precio - (($precio * $descuento) / 100);

                //CONFIGURAMOS IMAGENES DINAMICAS
                $dir_images = 'img/productos/' . $id . '/';
                //RUTA DE IMAGEN PRINCIPAL
                $rutaImg = $dir_images . 'tornillos.jpg';
                //VERIFICAMOS SI EXISTE LA IMAGEN
                if (!file_exists($rutaImg)) {
                    $rutaImg = 'img/404E.jpg';
                }

                //INGRESAMOS A LAS CARPETAS Y NOS QUEDAMOS CON TODAS LAS IMAGENES
                $imagenes = array();
                if(file_exists($dir_images)){

                    $dir = dir($dir_images);
    
                    while (($archivo = $dir->read()) != false) {
                        if ($archivo != 'principal.jpg' && (strpos($archivo, '.jpg') || strpos($archivo, '.jpeg') || strpos($archivo, '.png') )) {
                            //RUTA COMPLETA DEL ARCHIVO
                            $imagenes[] = $dir_images . $archivo;
                        }
                    }
                    $dir->close();

                }
            }
        } else {
            echo 'Error al procesar la petición';
            exit;
        }
    }

   
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="css/tiendacss.css">
</head>

<body>
    
<header>
  
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="#" class="navbar-brand">
        <strong>La Union</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="bi bi-person-circle"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarHeader">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a href="#" class="nav-link active">Inicio</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Servicios</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Tienda</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>

                <!-- <li class="nav-item"> -->
                    <!-- <a href="carrito.php" class="nav-link"> -->
                        <!-- Carrito<span id="num_cart" class="badge bg-secondary">8</span></a> -->
                <!-- </li> -->
            </ul>
            <div class="text-end">
                <a href="#" class="btn btn-warning">Perfil</a>
                <a href="checkout.php" class="btn btn-outline-info">
                        Carrito<span id="num_cart" class="badge bg-secondary"><?php echo $num_cart ?></span></a>
            </div>
        </div>
  </div>
</header>

<main>

    <!-- SHOW ARTICLE IN CARD FORMAT-->
    <div class="container">
       <div class="row">

       
            <div class="col-md-6 order-md-1">


                
                <div id="carouselImages" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $rutaImg; ?>" class="d-block w-50">
                        </div>

                        <?php foreach($imagenes as $img){ ?>
                            <div class="carousel-item">
                                <img src="<?php echo $img; ?>" class="d-block w-50">
                            </div>
                        <?php  }?>
                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>


                
            </div>

            <div class="col-md-6 order-md-2">
                <h2><?php echo $nombre; ?></h2>
                <h2><?php echo MONEDA . number_format($precio, 2, '.', '.'); ?></h2>
                <p class="lead">
                    <?php echo $descripcion; ?>
                </p>

                <!-- CENTRAR BOTONES mx-auto -->
                <div class="g-grid gap-2 col-6 ">

                    <button class="btn btn-primary" type="button">Comprar ahora</button>
                    <button class="btn btn-outline-success" type="button" onclick="addProducto(<?php echo $id; ?>, '<?php echo $token_tmp; ?>')">Agregar al carrito</button>

                </div>

            </div>
       </div>


    </div>
</main>



    <!--- ==========================FOOTER======================== -->
     <!--- ==========================MAIN JS======================== -->
    <!-- <script src="js/tienda.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script> 
        function addProducto(id, token){
            //ENVIAMOS LOS PRODUCTOS AL CARRITO MEDIANTE AJAX PARA QUE SEA DINAMICO
            let url = 'carrito.php';
            // formData NOS AYUDA A ENVIAR LOS DATOS POR EL METODO POST
            let formData = new FormData();
            formData.append('id', id);
            formData.append('token', token);

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(Response => Response.json())
            .then(data => {
                console.log(data);
                if(data.ok){
                    let elemento = document.getElementById('num_cart');
                    elemento.innerHTML = data.numero;
                }
            });
        }
    </script>
</body>

</html>