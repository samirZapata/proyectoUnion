<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <h1>La Union</h1>
                </div>

                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="admin.php" target="tienda">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="tienda.php" class="active" target="tienda">
                    <span class="material-icons-sharp">location_on</span>
                    <h3>Registrar local</h3>
                </a>

                <a href="registrarDescuentos.php" target="tienda">
                    <span class="material-icons-sharp">local_offer</span>
                    <h3>Registrar descuentos</h3>
                </a>

                <a href="registrarProducto.php" target="tienda">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Registrar productos</h3>
                </a>

                <a href="registrarClientes.php" target="tienda">
                    <span class="material-icons-sharp">group_add</span>
                    <h3>Registrar clientes</h3>
                </a>

                <a href="registrarVentas.php" target="tienda">
                    <span class="material-icons-sharp">request_quote</span>
                    <h3>Registrar ventas</h3>
                </a>

                <a href="registrarIngresos.php" target="tienda">
                    <span class="material-icons-sharp">addchart</span>
                    <h3>Registrar ingresos</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">playlist_remove</span>
                    <h3>Retirar productos</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">group_remove</span>
                    <h3>Retirar clientes</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">manage_accounts</span>
                    <h3>Control de usuarios</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Imprimir factura</h3>
                </a>

                <a href="cerrar.php">
                    <span class="material-icons-sharp">directions_walk</span>
                    <h3>Salir</h3>
                </a>
            </div>
        </aside>
        <iframe src="registrarProducto.php" name="tienda"  id="tienda" frameborder="2" height="1010px" width="1450px">
        <main>
            <h1>DASHBOARD</h1>
            <div class="date">
                <input type="date">
            </div>

            <div class="insights">

                <div class="sales">
                    <span class="material-icons-sharp">sell</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total descuentos</h3>
                            <h1>$2.000.000</h1>
                        </div>
                        <div class="progreso">
                            <svg>
                                <circle cx='38' cy='38' r='35'></circle>
                            </svg>
                            <div class="numero">
                                <p>83%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Ultimas 24 horas</small>
                </div>


                <div class="expenses">
                    <span class="material-icons-sharp">savings</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total creditos</h3>
                            <h1>$3.000.000</h1>
                        </div>
                        <div class="progreso">
                            <svg>
                                <circle cx='38' cy='38' r='35'></circle>
                            </svg>
                            <div class="numero">
                                <p>50%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Ultimas 24 horas</small>
                </div>


                <div class="income">
                    <span class="material-icons-sharp">auto_graph</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total ventas</h3>
                            <h1>$10.000.000</h1>
                        </div>
                        <div class="progreso">
                            <svg>
                                <circle cx='38' cy='38' r='35'></circle>
                            </svg>
                            <div class="numero">
                                <p>25%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Ultimas 24 horas</small>
                </div>
            </div>

            <div class="pedidos-recientes">
                <h2>Pedidos Recientes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre producto</th>
                            <th>ID Producto</th>
                            <th>Cantidad</th>
                            <th>Estado</th>
                            <th></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MALETIN CON HERRAMINETAS 
                                MIXTAS DE 142 PIEZAS</td>
                            <td>123456789</td>
                            <td>2</td>
                            <td class="warning">Pendiente</td>
                            <td class="primary">Detalles</td>
                        </tr>

                        <tr>
                            <td>MALETIN CON HERRAMINETAS 
                                MIXTAS DE 142 PIEZAS</td>
                            <td>246897754</td>
                            <td>10</td>
                            <td class="warning">Pendiente</td>
                            <td class="primary">Detalles</td>
                        </tr>

                        <tr>
                            <td>MALETIN CON HERRAMINETAS 
                                MIXTAS DE 142 PIEZAS</td>
                            <td>567458742</td>
                            <td>5</td>
                            <td class="warning">Pendiente</td>
                            <td class="primary">Detalles</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Ver Todos</a>
            </div>

        </main>
    </iframe>

    </div>
</body>
</html>