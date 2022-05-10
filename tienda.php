<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/tiendastyles.css">
</head>

<body>

    <header class="l-header" id="header">
        <nav class="nav bd-grid">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bxs-grid'></i>
            </div>

            <a href="#" class="nav__logo">La Union</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#Home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#featured" class="nav__link">Nuevo</a></li>
                    <li class="nav__item"><a href="#Mas vendido" class="nav__link">Mas Vendido</a></li>
                    <li class="nav__item"><a href="#Ofertas" class="nav__link">Ofertas</a></li>
                    <li class="nav__item"><a href="#Nosotros" class="nav__link"></a>About Us</li>
                </ul>
            </div>

            <div class="nav__shop">
                <i class="bx bx-shopping-bag"></i>
            </div>

        </nav>
    </header>
    
    <main class="l-main">
        <!--- ===========================HOME======================= -->
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__content"> <!-- home__sneakers -->
                    <div class="home__shape"></div>
                    <img src="img/product1.jpg" alt="" class="home__img">
                </div>

                <div class="home__data">
                    <span class="home__new">New in</span>
                    <h1 class="home__title">Yeezy boost <br> SPLY -350</h1>
                    <p class="home__description">Explore new products</p>
                    <a href="#" class="button">Explore Now</a>
                </div>
            </div>
        </section>

        <!--- ===========================NUEVO======================= -->
        <section class="featured section" id="featured">
            <h2 class="section-title">Nuevo</h2>

            <div class="featured__container bd-grid">
                <article class="sneaker">
                    <div class="sneaker__sale">Oferta</div>
                    <img src="img/product1.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Jordan</span>
                    <span class="sneaker__preci">$150</span>
                    <a href="" class="button-light">Añadir al carrito <i class='bx bx-right-arrow-alt button-icon'></i> </a>
                </article>

                <article class="sneaker">
                    <div class="sneaker__sale">Oferta</div>
                    <img src="img/product1.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Jordan</span>
                    <span class="sneaker__preci">$150</span>
                    <a href="" class="button-light">Añadir al carrito <i class='bx bx-right-arrow-alt button-icon'></i> </a>
                </article>

                <article class="sneaker">
                    <div class="sneaker__sale">Oferta</div>
                    <img src="img/product1.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Jordan</span>
                    <span class="sneaker__preci">$150</span>
                    <a href="" class="button-light">Añadir al carrito <i class='bx bx-right-arrow-alt button-icon'></i> </a>
                </article>

                <article class="sneaker">
                    <div class="sneaker__sale">Oferta</div>
                    <img src="img/product1.jpg" alt="" class="sneaker__img">
                    <span class="sneaker__name">Nike Jordan</span>
                    <span class="sneaker__preci">$150</span>
                    <a href="" class="button-light">Añadir al carrito <i class='bx bx-right-arrow-alt button-icon'></i> </a>
                </article>
            </div>
        </section>

        <!--- ===========================MAS VENDIDO======================= -->
        <section class="collection section">
            <div class="collection__container bd-grid">
                <div class="collection__card">
                    <div class="colelection__data">
                        <h3 class="collection__name">Lo mas vendido</h3>
                        <p class="collection__description">Explorar</p>
                        <a href="#" class="button-light">Conprar <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </div>
                    <img src="img/product1.jpg" alt="" class="collection__img">
                </div>

                <div class="collection__card">
                    <div class="colelection__data">
                        <h3 class="collection__name">Lo mas vendido</h3>
                        <p class="collection__description">Explorar</p>
                        <a href="#" class="button-light">Conprar <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </div>
                    <img src="img/product1.jpg" alt="" class="collection__img">
                </div>

                <div class="collection__card">
                    <div class="colelection__data">
                        <h3 class="collection__name">Lo mas vendido</h3>
                        <p class="collection__description">Explorar</p>
                        <a href="#" class="button-light">Conprar <i class='bx bx-right-arrow-alt button-icon'></i></a>
                    </div>
                    <img src="img/product1.jpg" alt="" class="collection__img">
                </div>
            </div>
        </section>
    </main>


    <!--- ==========================FOOTER======================== -->


     <!--- ==========================MAIN JS======================== -->
    <script src="js/tienda.js"></script>
</body>

</html>