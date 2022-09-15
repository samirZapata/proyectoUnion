<?php 
    require 'config.php';
    include 'db.php';
    $db = new Database();
    $con = $db->conectar();
    $sql = $con->prepare("SELECT id, nombre, precio FROM productos");
    //$sqlID = $con->prepare("SELECT id FROM productos");
    //$sqlID->execute();
    $sql->execute();
    //$resID = $sqlID->fetchAll(PDO::FETCH_ASSOC);
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);//ASOCIA LOS DATOS POR NOMBRE DE COLUMNA

    if(isset($_SESSION['usuario'])){
       
        //TRAER PERFILES
        $email_session = $_SESSION['usuario'];
        $query_session = $pdo->prepare("SELECT * FROM datos WHERE usuario = '$email_session'");
        $query_session->execute();
        $session_usuarios = $query_session->fetchAll(PDO::FETCH_ASSOC);
    
        foreach($session_usuarios as $session_usuario){
            $id_session = $session_usuario['id'];
            $nombre_session = $session_usuario['nombre'];
            $apellido_session = $session_usuario['usuario'];
            $email_session = $session_usuario['clave'];
        }

    }

    //session_destroy();

    //print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/tiendacss.css">
</head>

<body>
    
<header>
  
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="tienda.php" class="navbar-brand">
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
                    <a href="tienda.php" class="nav-link">Tienda</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                <a href="checkout.php" target="_blank" class="btn btn-outline-info">
                        Carrito<span id="num_cart" class="badge bg-secondary"><?php echo $num_cart ?></span></a>
                </li>
            </ul>
            <div class="text-end">
                <a href="index.php" type="button" class="btn btn-outline-light me-2">Login</a>
                <a href="registro.php" type="button" class="btn btn-warning">Sign-up</a>
            </div>
    </div>
  </div>
</header>

<main>

    <!-- SHOW ARTICLE IN CARD FORMAT-->
    <div class="container">
        <!-- Indicamos la cantidad de cards que queremos -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 car">
        <?php foreach ($resultado as $row) { ?> 
        <div class="col">
          <div class="card shadow-sm p-3 mb-5 bg-body rounded">

          <!-- CREAMOS UNA CONDICION PARA TRAER LAS IMAGENES DE DISCO Y NO DE LA DB -->
          <?php
            $id = $row['id'];
            $imagen = 'img/productos/' . $id . '/llave.jpg';//RUTA DE LA IMAGEN
          
            //EN CASO DE NO ENCONTRAR LA IMG EN LA RUTA TOMARA UNA IMG PREDETERMINADA
            if (!file_exists($imagen)) {
              $imagen = 'img/404E.jpg';
            }
          ?>
            <!-- FIN DEL ALGORITMO -->
            <img src="<?php echo $imagen; ?>" class="d-block w-100">

            <div class="card-body">
              <h4 class="card-title"><?php echo $row['nombre']; ?></h4>
                  <p class="card-text">$ <?php echo number_format($row['precio'], 2, '.', '.'); ?></p>
                
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <!-- LA FUNCION hash_hmac() NOS PERMITE CIFRAR INFO MEDIANTE UNA PASS 
                    SOPORTA ALGORITMOS DE HASHING Y DE CIFRADO, DESDE MD5 EN ADELANTE, POR PARAMETRO
                    LE PASAMOS LA INFO A CIFRAR Y LA PASS PARA QUE LA FUNCION HAGA EL CIFRADO-->
                  <a href="detalles.php?id=<?php echo $row['id']; ?>&token=<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>" class="btn btn-primary" target="_blank">Detalles</a>
                </div>
                <button class="btn btn-outline-success" type="button" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">Agregar al carrito</button>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
    </div>
</main>



    <!--- ==========================FOOTER======================== -->
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="tienda.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Services</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 La Union, Inc</p>
  </footer>
</div>
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