<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style2.css">
    
</head>
<body>
    
<main>
<nav class="nav">
    
        <ul class="list">
            <li class="list__item">
                <div class="list__button" >
                <i class='bx bxs-dashboard' class="list__arrow"></i>
                    <a href="#" class="nav__link">Dashboard</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <i class='bx bxs-package list_image' class="list__arrow"></i>
                    <a href="#" class="nav__link">Productos</a>
                    <i class='bx bx-chevron-right list__arrow'></i>
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="registrarProducto.php" target="tienda" class="nav__link nav__link--inside">Registrar productos</a>
                    </li>

                    <li class="list__inside">
                        <a href="verProductos.php" target="tienda" class="nav__link nav__link--inside">Ver productos</a>
                    </li>
                    <li class="list__inside">
                        <a href="eliminarProductos.php" target="tienda" class="nav__link nav__link--inside">Eliminar productos</a>
                    </li>
                    <li class="list__inside">
                        <a href="modificarProducto.php" target="tienda" class="nav__link nav__link--inside">Modificar productos</a>
                    </li>
                </ul>

            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <i class='bx bxs-offer' class="list__arrow"></i>
                    <a href="#" class="nav__link">Descuentos</a>
                    <i class='bx bx-chevron-right list__arrow'></i>
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="registrarDescuentos.php" target="tienda" class="nav__link nav__link--inside">Registrar Descuentos</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Ver Descuentos</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Eliminar Descuentos</a>
                    </li>
                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Modificar Descuentos</a>
                    </li>
                </ul>

            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">

                    <i class='bx bxs-pie-chart-alt-2' class="list__arrow"></i>
                    <a href="#" class="nav__link">Ingresos</a>
                    <i class='bx bx-chevron-right list__arrow'></i>
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="registrarIngresos.php" target="tienda" class="nav__link nav__link--inside">Registrar ingresos</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Ver Ingresos del mes</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Eliminar ingreso</a>
                    </li>
                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Modificar ingreso</a>
                    </li>
                </ul>

            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <i class='bx bx-money' class="list__arrow"></i>
                    <a href="#" class="nav__link">Ventas</a>
                    <i class='bx bx-chevron-right list__arrow'></i>
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="registrarVentas.php" target="tienda" class="nav__link nav__link--inside">Registrar venta</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Ver ventas</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Eliminar venta</a>
                    </li>
                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Modificar venta</a>
                    </li>
                </ul>

            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <i class='bx bxs-user-badge' class="list__arrow"></i>
                    <a href="#" class="nav__link">Usuarios</a>
                    <i class='bx bx-chevron-right list__arrow'></i>
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="registrarUsuarios.php" target="tienda" class="nav__link nav__link--inside">Registrar usuario</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Ver Usuarios</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Eliminar usuario</a>
                    </li>
                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Modificar usuario</a>
                    </li>
                </ul>

            </li>

            <li class="list__item">
                <div class="list__button">
                    <i class='bx bx-run' class="list__img"></i>
                    <a href="cerrar.php" class="nav__link">Salir</a>
                </div>
            </li>

        </ul>
        <iframe src="registrarProducto.php" name="tienda"  id="tienda" frameborder="0" height="100%" width="1350px">
           
        </iframe>
    </nav>

    
    </main>
    <script src="js/main.js"></script>
</body>
</html>