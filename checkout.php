<?php 
    require 'config.php';
    include 'db.php';
    $db = new Database();
    $con = $db->conectar();

    $productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;
    $lista_carrito = array();

    //EXTRAEMOS TODOS LOS PRODUCTOS DE LA SESION Y VALIDAMOS QUE LO QUE ESTAMOS RECIBIENDO SEA 
    //DIFERENTE DE NULO, ES DECIR QUE HAYA PRODUCTOS EN EL CARRITO
    if($productos != null){
        foreach($productos as $clave => $cantidad){ //CLAVE=ID DEL PRODUCTO, CANTIDAD=CANTIDAD DE PRODUCTOS

            //PASAMOS LA CANTIDAD DIRECTAMENTE A LA CONSULTA PARA QUE LA ARROJE EN UNA SOLA SENTENCIA
            $sql = $con->prepare("SELECT id, nombre, precio, $cantidad as cantidad FROM productos WHERE id=?");
            $sql->execute([$clave]);
            //SE ESPECIFICA QUE VA TRAER 1X1 CON fetch()
            $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);
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
                    <a href="#" class="nav-link">Tienda</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <!-- <li class="nav-item">
                <a href="carrito.php" class="btn btn-outline-info">
                        Carrito<span id="num_cart" class="badge bg-secondary"><?php echo $num_cart ?></span></a>
                </li> -->
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


   
    <div class="container containerT">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- CONSTRUCCION DE LA TABLA -->
            <h3 class="text-center">Mi Carrito</h3>
            <div class="table-responsive table-hover">
                <table class="table ">
                    <thead class="text-muted">
                        <tr>
                            <th class="">Producto</th>
                            <th class="">Precio</th>
                            <th class="">Cantidad</th>
                            <th class="">Subtotal</th>
                            <th class=""></th>
                        </tr>
                    </thead>
                    <!-- CUERPO DE LA TABLA -->
                    <tbody>
                        <!-- VERIFICAMOS SI LA LISTA ESTA VACIA Y ENVIAMOS UN MENSAJE -->
                        <?php  
                            if($lista_carrito == null){
                                echo '<tr<td colspan=5 class="text-center"><b>Lista vacia</b></td></tr>';
                            }else{ //EN CASO DE NO ESTAR VACIA, RECORREMOS NUESTRO ARREGLO DONDE ESTAN LOS PRODUCTOS
                                $total = 0;
                                foreach($lista_carrito as $producto){
                                    //EXTRAEMOS LOS ELEMENTOS DE NUESTRA CONSULTA
                                    $id = $producto['id'];
                                    $nombre = $producto['nombre'];
                                    $precio = $producto['precio'];
                                    $cantidad = $producto['cantidad'];
                                    $subtotal = $cantidad * $precio;
                                    $total += $subtotal;
                            
                        ?>

                        <tr>
                            <td><?php echo $nombre; ?></td>
                            <td><?php echo MONEDA . number_format($precio,2,'.',','); ?></td>
                            <td>
                                <!-- CAMPO PARA LA CANTIDAD DE PRODUCTOS -->
                                <input type="number" min="1" max="12" step="1" value="<?php echo $cantidad; ?>" size="5" id="cantidad_<?php echo $id; ?>" onchange="actualizaCantidad(this.value, <?php echo $id; ?> )">
                            </td>
                            <td>
                                <div id="subtotal_<?php echo $id; ?>" name="subtotal[]">
                                    <?php echo MONEDA . number_format($subtotal,2,'.',','); ?>
                                </div>
                            </td>
                            <!-- data-bs-id="" SE LE PUEDE CAMBIAR id POR EL DATO QUE DESEEMOS PASAR -->
                            <td><a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo $id; ?>" data-bs-toggle="modal" data-bs-target="#elimininaModal">Eliminar</a></td>
                        </tr>
                        <?php } ?>

                            <tr>
                                <td colspan="3"></td>
                                <td colspan="2">
                                    <p class="h3" id="total"><?php echo MONEDA . number_format($total, 2, '.', ',') ?></p>
                                </td>
                            </tr>
                    
                    </tbody>
                <?php } ?>
                </table>
            </div>

            <div class="row">
                <div class="col-md-3 offset-md-1 d-grid gap-2">
                    <button class="btn btn-outline-primary btn-lg">Completar compra</button>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- MENSAJE AL ELIMINAR -->

<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#elimininaModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="elimininaModal" tabindex="-1" aria-labelledby="elimininaModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="elimininaModal">¡Alerta!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el producto del carrito?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="btn-elimina" type="button" class="btn btn-danger" onclick="eliminar()">Eliminar</button>
      </div>
    </div>
  </div>
</div>


    <!--- ==========================FOOTER======================== -->
     <!--- ==========================MAIN JS======================== -->
    <!-- <script src="js/tienda.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script> 


        //FUNCION PARA ELIMINAR PRODUCTO DEL CARRITO
        let eliminaModal = document.getElementById('elimininaModal');
        eliminaModal.addEventListener('show.bs.modal', function(event){
            //HACEMOS EL INTERCAMBIO DE DATOS PARA CUANDO SE EJECUTE EL MODAL
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')//OBTENEMOS EL ID DEL PRODUCTO QUE ESTAMOS PASANDO POR EL BOTON
            let buttonElimina = eliminaModal.querySelector('.modal-footer #btn-elimina')
            buttonElimina.value = id

        })

        function actualizaCantidad(cantidad, id){
            //ENVIAMOS LOS PRODUCTOS AL CARRITO MEDIANTE AJAX PARA QUE SEA DINAMICO
            let url = 'actualizarCarrito.php';
            // formData NOS AYUDA A ENVIAR LOS DATOS POR EL METODO POST
            let formData = new FormData();
            formData.append('action', 'agregar');
            formData.append('id', id);
            formData.append('cantidad', cantidad);

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(Response => Response.json())
            .then(data => {
                console.log(data);
                if(data.ok){

                    let divsubtotal = document.getElementById('subtotal_' + id);
                    divsubtotal.innerHTML = data.sub;

                    let total = 0.00
                    let list = document.getElementsByName('subtotal[]')

                    for (let i = 0; i < list.length; i++) {
                        total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''));
                    }

                    total = new Intl.NumberFormat('en-US', { 
                        minimumFractionDigits: 2,
                    }).format(total);
                    document.getElementById('total').innerHTML = '<?php echo MONEDA; ?>' + total;

                }
            });
        }


        function eliminar(){

            let buttonElimina = document.getElementById('btn-elimina')
            let id = buttonElimina.value

            //ENVIAMOS LOS PRODUCTOS AL CARRITO MEDIANTE AJAX PARA QUE SEA DINAMICO
            let url = 'actualizarCarrito.php';
            // formData NOS AYUDA A ENVIAR LOS DATOS POR EL METODO POST
            let formData = new FormData();
            formData.append('action', 'eliminar');
            formData.append('id', id);

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(Response => Response.json())
            .then(data => {
                console.log(data);
                if(data.ok){
                    location.reload()
                }
            });
        }

    </script>
</body>

</html>