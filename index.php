<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="img/favicon.png" rel="apple-touch-icon-precomposed">
    <link href="img/favicon.png" rel="shortcut icon" type="image/png">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>ClicIT</title>
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="plugins/fonts/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:400,500,600,700&amp;display=swap&amp;ver=1607580870">

    <link rel="stylesheet" href="plugins/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/jquery/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/slider/nouislider.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/inicio.css">
</head>

<body>
    <div class="ps-page">
        <header class="ps-header ps-header--1">

            <!-- ANUNCIO -->
            <div class="ps-noti">
                <div class="container">
                    <p class="m-0">Aquí va algun<strong> Anuncio </strong></p>
                </div><a class="ps-noti__close"><i class="icon-cross"></i></a>
            </div>
            <div class="ps-header__top">
                <div class="container">
                    <div class="ps-header__text">Llamanos: <strong>(+51) 928 214 454</strong></div>
                </div>
            </div>
            <!-- ANUNCIO -->

            <!-- CABECERA -->
            <div class="ps-header__middle">
                <div class="container">
                    <div class="ps-logo"><a href="./"> <img src="img/logo_clic.png" alt><img class="sticky-logo" src="img/logo_clic.png" alt></a></div><a class="ps-menu--sticky" href="#"><i class="fa fa-bars"></i></a>
                    <div class="ps-header__right">
                        <ul class="ps-header__icons">
                            <li><a class="ps-header__item open-search" href="#"><i class="icon-magnifier"></i></a></li>
                            <li><a class="ps-header__item" href="#" id="login-modal"><i class="icon-user"></i></a>
                                <div class="ps-login--modal">
                                    <form method="get" action="#">
                                        <div class="form-group">
                                            <label>Tipo de Usuario</label>
                                            <select class="form-control">
                                                <option>Vendedor</option>
                                                <option>Cliente</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Usuario</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input class="form-control" type="password">
                                        </div>
                                        <div class="form-group form-check">
                                            <input class="form-check-input" type="checkbox">
                                            <label>Recordar datos</label>
                                        </div>
                                        <button class="ps-btn ps-btn--warning" type="submit">Ingresar</button>
                                    </form>
                                </div>
                            </li>
                            <li><a class="ps-header__item" href="lista_de_deseos.php"><i class="fa fa-heart-o"></i><span class="badge">0</span></a></li>
                            <li><a class="ps-header__item" href="carrito.php"><i class="icon-cart-empty"></i><span class="badge">0</span></a></li>
                        </ul>
                        <div class="ps-header__search">
                            <form action="" method="post">
                                <div class="ps-search-table">
                                    <div class="input-group">
                                        <div class="input-group-append" style="background: #ebe8e8; color: #103178; font-size: 13px;"><a href="productos.php">TODOS</a></div>
                                        <input class="form-control ps-input" type="text" placeholder="Buscar producto">
                                        <div class="input-group-append"><a href="#"><i class="fa fa-search"></i></a></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CABECERA -->

            <!-- MENU -->
            <div class="ps-navigation">
                <div class="container">
                    <div class="ps-navigation__left">
                        <nav class="ps-main-menu">
                            <ul class="menu">
                                <li class="has-mega-menu"><a href="productos.php">LAPTOPS Y TABLETS</a></li>
                                <li class="has-mega-menu"><a href="productos.php">COMPUTADORAS</a></li>
                                <li class="has-mega-menu"><a href="productos.php">PARTES DE PC</a></li>
                                <li class="has-mega-menu"><a href="productos.php">MONITORES Y MÁS</a></li>
                                <li class="has-mega-menu"><a href="productos.php">IMPRESORAS Y MÁS</a></li>
                                <li class="has-mega-menu"><a href="contactenos.php">CONTACTENOS</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="ps-navigation__right">Llamanos: <strong>(+51) 928 214 454</strong></div>
                </div>
            </div>
            <!-- MENU -->

            <!-- MEGA MENU -->
            <!--
            <div class="ps-navigation">
                <div class="container">
                    <div class="ps-navigation__left">
                        <nav class="ps-main-menu">
                            <ul class="menu">

                                <li class="has-mega-menu"><a href="#">LAPTOPS Y TABLETS<span class="sub-toggle"><i class="fa fa-chevron-down"></i></span></a>
                                    <div class="mega-menu">
                                        <div class="container">
                                            <div class="mega-menu__row">
                                                <div class="mega-menu__column">
                                                    <h4>Categoría</h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="#">Sub Categoría</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ps-branch">
                                                <div class="ps-branch__box">

                                                    <div class="ps-branch__item"><a href="#"><img src="img/branch/brand-1.jpg" alt="alt" /></a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="has-mega-menu"><a href="#">COMPUTADORAS<span class="sub-toggle"><i class="fa fa-chevron-down"></i></span></a>
                                    <div class="mega-menu">
                                        <div class="container">
                                            <div class="mega-menu__row">
                                                <div class="mega-menu__column">
                                                    <h4>Categoría</h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="#">Sub Categoría</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ps-branch">
                                                <div class="ps-branch__box">

                                                    <div class="ps-branch__item"><a href="#"><img src="img/branch/brand-1.jpg" alt="alt" /></a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="has-mega-menu"><a href="#">PARTES DE PC<span class="sub-toggle"><i class="fa fa-chevron-down"></i></span></a>
                                    <div class="mega-menu">
                                        <div class="container">
                                            <div class="mega-menu__row">
                                                <div class="mega-menu__column">
                                                    <h4>Categoría</h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="#">Sub Categoría</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ps-branch">
                                                <div class="ps-branch__box">

                                                    <div class="ps-branch__item"><a href="#"><img src="img/branch/brand-1.jpg" alt="alt" /></a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="has-mega-menu"><a href="#">MONITORES Y MÁS<span class="sub-toggle"><i class="fa fa-chevron-down"></i></span></a>
                                    <div class="mega-menu">
                                        <div class="container">
                                            <div class="mega-menu__row">
                                                <div class="mega-menu__column">
                                                    <h4>Categoría</h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="#">Sub Categoría</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ps-branch">
                                                <div class="ps-branch__box">

                                                    <div class="ps-branch__item"><a href="#"><img src="img/branch/brand-1.jpg" alt="alt" /></a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="has-mega-menu"><a href="#">IMPRESORAS Y MÁS<span class="sub-toggle"><i class="fa fa-chevron-down"></i></span></a>
                                    <div class="mega-menu">
                                        <div class="container">
                                            <div class="mega-menu__row">
                                                <div class="mega-menu__column">
                                                    <h4>Categoría</h4>
                                                    <ul class="sub-menu--mega">
                                                        <li><a href="#">Sub Categoría</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ps-branch">
                                                <div class="ps-branch__box">

                                                    <div class="ps-branch__item"><a href="#"><img src="img/branch/brand-1.jpg" alt="alt" /></a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="has-mega-menu"><a href="#">CONTACTENOS</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div class="ps-navigation__right">Llamanos: <strong>(+51) 928 214 454</strong></div>
                </div>
            </div>
            -->
            <!-- MEGA MENU -->

        </header>

        <!-- CABECERA MOVIL -->
        <header class="ps-header ps-header--1 ps-header--mobile">
            <div class="ps-noti">
                <div class="container">
                    <p class="m-0">Aquí va un <strong> Anuncio</strong></p>
                </div><a class="ps-noti__close"><i class="icon-cross"></i></a>
            </div>
            <div class="ps-header__middle">
                <div class="container">
                    <div class="ps-logo"><a href="./"> <img src="img/logo_clic.png" alt></a></div>
                    <div class="ps-header__right">
                        <ul class="ps-header__icons">
                            <li><a class="ps-header__item open-search" href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- CABECERA MOVIL -->

        <div class="ps-home ps-home--1">
            <!--
            <section class="ps-section--banner">
                <div class="ps-section__overlay">
                    <div class="ps-section__loading"></div>
                </div>
                <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-banner">
                        <div class="container container-initial">
                            <div class="ps-banner__block">
                                <div class="ps-banner__thumnail"><img class="ps-banner__round" src="img/slider/s2.jpeg" alt="alt" /><img class="ps-banner__image" src="img/slider/s2.jpeg" alt="alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-banner">
                        <div class="container container-initial">
                            <div class="ps-banner__block">
                                <div class="ps-banner__thumnail"><img class="ps-banner__round" src="img/slider/s1.jpeg" alt="alt" /><img class="ps-banner__image" src="img/slider/s1.jpeg" alt="alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-banner">
                        <div class="container container-initial">
                            <div class="ps-banner__block">
                                <div class="ps-banner__thumnail"><img class="ps-banner__round" src="img/slider/s1.jpeg" alt="alt" /><img class="ps-banner__image" src="img/slider/s1.jpeg" alt="alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        -->

            <style type="text/css">
                .slider {
   margin: auto;
   overflow: hidden;
}

.slider ul {
   display: flex;
   padding: 0;
   width: 400%;
   animation: cambio 15s infinite alternate linear;
}

.slider li {
   width: 100%;
   list-style: none;
}

.slider img {
   width: 100%;
}

@keyframes cambio {
   0% {margin-left: 0;}
   20% {margin-left: 0;}
   
   25% {margin-left: -100%;}
   45% {margin-left: -100%;}
   
   50% {margin-left: -200%;}
   70% {margin-left: -200%;}
   
   75% {margin-left: -300%;}
   100% {margin-left: -300%;}
}

            </style>

<div class="slider">
            <ul>
               <li>
               <img src="img/slider/s2.jpeg" alt="">
               </li>
               <li>
               <img src="img/slider/s1.jpeg" alt="">
               </li>
               <li>
               <img src="img/slider/s2.jpeg" alt="">
               </li>
               <li>
               <img src="img/slider/s1.jpeg" alt="">
               </li>
            </ul>
         </div>

            <div class="ps-home__content">
                <div class="container">
                    <div class="ps-promo ps-not-padding">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="ps-promo__item"><img class="ps-promo__banner" src="img/slider/1.png" alt="alt" />
                                    <div class="ps-promo__content"><span class="ps-promo__badge">Nuevo</span>
                                        <h4 class="mb-20 ps-promo__name">AMD RAZEN <br/>5 2600<br/> PC GAMER</h4><a class="ps-promo__btn" href="#">Leer más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="ps-promo__item"><img class="ps-promo__banner" src="img/slider/3.png" alt="alt" />
                                    <div class="ps-promo__content">
                                        <h4 class="ps-promo__name">Imprime más<br/>pagando<br/>menos</h4>
                                        <div class="ps-promo__sale">-10%</div><a class="ps-promo__btn" href="#">Leer más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="ps-promo__item"><img class="ps-promo__banner" src="img/slider/4.png" alt="alt" />
                                    <div class="ps-promo__content">
                                        <h4 class="text-white ps-promo__name">Tarjeta de Video<br/> RX 6700 XT</h4>
                                        <div class="ps-promo__meta">
                                            <p class="ps-promo__price">S/ 000.00</p>
                                            <p class="ps-promo__del">S/ 0000.00</p>
                                        </div><a class="ps-promo__btn" href="#">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="ps-section--latest">
                    <div class="container">
                        <h3 class="ps-section__title">Nuestros Productos</h3>
                        <div class="ps-section__carousel">
                            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-section__product">
                                    <div class="ps-product ps-product--standard">
                                        <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                                <figure><img src="img/slider/p1.png" alt="alt" />
                                                </figure>
                                            </a>
                                            <div class="ps-product__actions">
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="lista_de_deseos.php"><i class="fa fa-heart-o"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Ver Detalles"><a href="detalles.php"><i class="fa fa-search"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Añadir al Carrito"><a href="carrito.php"><i class="fa fa-shopping-basket"></i></a></div>
                                            </div>
                                            <div class="ps-product__badge">
                                                <div class="ps-badge ps-badge--sold">Oferta</div>
                                            </div>
                                        </div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a href="#">Este es el largo titulo del producto</a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__price sale">S/ 00.00</span><span class="ps-product__del">S/ 000.00</span>
                                            </div>
                                            <div class="ps-product__actions ps-product__group-mobile">
                                                <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="Añadir al Carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ps-section__product">
                                    <div class="ps-product ps-product--standard">
                                        <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                                <figure><img src="img/slider/p2.png" alt="alt" />
                                                </figure>
                                            </a>
                                            <div class="ps-product__actions">
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Ver Detalles"><a href="#"><i class="fa fa-search"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Añadir al Carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                            </div>
                                            <div class="ps-product__badge">
                                                <div class="ps-badge ps-badge--hot">Oferta</div>
                                            </div>
                                        </div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a href="#">Este es el largo titulo del producto</a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__price sale">S/ 00.00</span><span class="ps-product__del">S/ 000.00</span>
                                            </div>
                                            <div class="ps-product__actions ps-product__group-mobile">
                                                <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="Añadir al Carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <div class="ps-delivery">
                        <img src="img/slider/b1.jpg">
                    </div>
                    <section class="ps-section--deals">
                        <div class="ps-section__header">
                            <h3 class="ps-section__title">Mejores Productos</h3>
                        </div>
                        <div class="ps-section__carousel">
                            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-section__product">
                                    <div class="ps-product ps-product--standard">
                                        <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                                <figure><img src="img/slider/p5.png" alt="alt" />
                                                </figure>
                                            </a>
                                            <div class="ps-product__actions">
                                                    <div class="ps-product__actions">
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Ver Detalles"><a href="#"><i class="fa fa-search"></i></a></div>
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Añadir al Carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                        </div>
                                            <div class="ps-product__percent">-00%</div>
                                        <div class="ps-product__content">
                                            <h5 class="ps-product__title"><a href="#">Este es el largo titulo del producto</a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__price sale">S/ 00.00</span><span class="ps-product__del">S/ 000.00</span>
                                                </div>
                                            <div class="ps-product__actions ps-product__group-mobile">
                                                <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Agregar al carrito</a></div>
                                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="Agregar al carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="Comparar"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="ps-section--sellers">
                        <h3 class="ps-section__title">Productos Relacionados</h3>
                        <div class="ps-section__tab">
                            <ul class="nav nav-tabs" id="bestsellerTab" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active" id="blood-tab" data-toggle="tab" href="#blood" role="tab" aria-controls="blood" aria-selected="true">COMPUTADORAS</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="mask-tab" data-toggle="tab" href="#mask" role="tab" aria-controls="mask" aria-selected="false">IMPRESORAS</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="stomatology-tab" data-toggle="tab" href="#stomatology" role="tab" aria-controls="stomatology" aria-selected="false">MONITORES</a></li>
                            </ul>
                            <div class="tab-content" id="bestsellerTabContent">
                                <div class="tab-pane fade show active" id="blood" role="tabpanel" aria-labelledby="blood-tab">
                                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                                        <figure><img src="img/slider/p4.png" alt="alt" />
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Ver Producto"><a href="#"><i class="fa fa-search"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Agregar al carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sold">Oferta</div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a href="#">Este es el largo titulo del producto</a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__price sale">S/ 00.00</span><span class="ps-product__del">S/ 000.00</span>
                                                </div>
                                                    <div class="ps-product__actions ps-product__group-mobile">
                                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Agregar al carrito</a></div>
                                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="Agregar al carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="Comparar"><a href="#"><i class="fa fa-align-left"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="mask" role="tabpanel" aria-labelledby="mask-tab">
                                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                                        <figure><img src="img/slider/p2.png" alt="alt" />
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Ver Producto"><a href="#"><i class="fa fa-search"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Agregar al carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sold">Oferta</div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a href="#">Este es el largo titulo del producto</a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__price sale">S/ 00.00</span><span class="ps-product__del">S/ 000.00</span>
                                                </div>
                                                    <div class="ps-product__actions ps-product__group-mobile">
                                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Agregar al carrito</a></div>
                                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="Agregar al carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="Comparar"><a href="#"><i class="fa fa-align-left"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="stomatology" role="tabpanel" aria-labelledby="stomatology-tab">
                                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                                        <figure><img src="img/slider/p5.png" alt="alt" />
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Ver Producto"><a href="#"><i class="fa fa-search"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Agregar al carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sold">Oferta</div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a href="#">Este es el largo titulo del producto</a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__price sale">S/ 00.00</span><span class="ps-product__del">S/ 000.00</span>
                                                </div>
                                                    <div class="ps-product__actions ps-product__group-mobile">
                                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Agregar al carrito</a></div>
                                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="Agregar al carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="Comparar"><a href="#"><i class="fa fa-align-left"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="ps-promo">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="ps-promo__item"><img class="ps-promo__banner" src="img/slider/b2.jpg" alt="alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="ps-section--featured">
                        <h3 class="ps-section__title">Productos</h3>
                        <div class="ps-section__content">
                            <div class="row m-0">

                                <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                                    <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                                        <figure><img src="img/slider/p1.png" alt="alt" />
                                                        </figure>
                                                    </a>
                                                    <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Ver Producto"><a href="#"><i class="fa fa-search"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Agregar al carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                </div>
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sold">Oferta</div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title"><a href="#">Este es el largo titulo del producto</a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__price sale">S/ 00.00</span><span class="ps-product__del">S/ 000.00</span>
                                                </div>
                                                    <div class="ps-product__actions ps-product__group-mobile">
                                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">Agregar al carrito</a></div>
                                                    <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="Agregar al carrito"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                                    <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="Lista de Deseos"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                    <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="Comparar"><a href="#"><i class="fa fa-align-left"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>                                
                            </div>
                            <div class="ps-shop__more"><a href="#">Ver Productos</a></div>
                        </div>
                    </section>
                </div>
                <div class="container">
                    <section class="ps-section--instagram">
                        <h3 class="ps-section__title">Siguenos en nuestras <strong> REDES SOCIALES </strong></h3>
                        <div class="ps-section__content">
                            <div class="row m-0">

                                <div class="col-6 col-md-4 col-lg-2"> <a class="ps-image--transition" href=""> <img src="img/slider/p1.png" alt><span class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a></div>

                                <div class="col-6 col-md-4 col-lg-2"> <a class="ps-image--transition" href=""> <img src="img/slider/p1.png" alt><span class="ps-image__overlay"><i class="fa fa-facebook"></i></span></a></div>

                            </div>
                        </div>
                    </section>
                    <section class="ps-section--newsletter" data-background="img/newsletter-bg.jpg">
                        <h3 class="ps-section__title">Envianos tu correo elextrónico <br> y recibiras ofertas especiales</h3>
                        <div class="ps-section__content">
                            <form action="" method="post">
                                <div class="ps-form--subscribe">
                                    <div class="ps-form__control">
                                        <input class="form-control ps-input" type="email" placeholder="Correo Electrónico">
                                        <button class="ps-btn ps-btn--warning">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <footer class="ps-footer ps-footer--1">
            <div class="ps-footer--top">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-12 col-sm-4 p-0">
                            <p class="text-center"><a class="ps-footer__link"><i class="icon-wallet"></i>Compra Segura</a></p>
                        </div>
                        <div class="col-12 col-sm-4 p-0">
                            <p class="text-center"><a class="ps-footer__link"><i class="icon-bag2"></i>Atención 24/7</a></p>
                        </div>
                        <div class="col-12 col-sm-4 p-0">
                            <p class="text-center"><a class="ps-footer__link"><i class="icon-truck"></i>Delivery Gratis</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="ps-footer__middle">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="ps-footer--address">
                                        <div class="ps-logo"><a href="./"> <img src="img/logo_clic.png" alt><img class="logo-white" src="img/logo-white.png" alt><img class="logo-black" src="img/logo_clic.png" alt><img class="logo-white-all" src="img/logo_clic.png" alt><img class="logo-green" src="img/logo_clic.png" alt></a></div>
                                        <div class="ps-footer__title">ClicIT</div>
                                        <p>Lima Perú</p>
                                        <p><a target="_blank" href="#">Ver el mapa</a></p>
                                        <ul class="ps-social">
                                            <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook"> </i><span class="ps-tooltip">Facebook</span></a></li>
                                            <li><a class="ps-social__link instagram" href="#"><i class="fa fa-instagram"></i><span class="ps-tooltip">Instagram</span></a></li>
                                            <li><a class="ps-social__link youtube" href="#"><i class="fa fa-youtube-play"></i><span class="ps-tooltip">Youtube</span></a></li>
                                            <li><a class="ps-social__link pinterest" href="#"><i class="fa fa-pinterest-p"></i><span class="ps-tooltip">Pinterest</span></a></li>
                                            <li><a class="ps-social__link linkedin" href="#"><i class="fa fa-linkedin"></i><span class="ps-tooltip">Linkedin</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="ps-footer--contact">
                                        <h5 class="ps-footer__title">Llamanos:</h5>
                                        <div class="ps-footer__fax"><i class="icon-telephone"></i>(+51) 928 214 454</div>
                                        <hr>
                                        <p><a class="ps-footer__email" href="#"> <i class="icon-envelope"></i><span class="__cf_email__">ventas@clicit.pe</span> </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="ps-footer--block">
                                        <h5 class="ps-block__title">Información</h5>
                                        <ul class="ps-block__list">
                                            <li><a href="nosotros.php">Nosotros</a></li>
                                            <li><a href="#">Delivery Gratis</a></li>
                                            <li><a href="#">Politicas de Privacidad</a></li>
                                            <li><a href="#">Terminos y Condiciones</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="ps-footer--block">
                                        <h5 class="ps-block__title">Cuenta</h5>
                                        <ul class="ps-block__list">
                                            <li><a href="#">Mi cuenta</a></li>
                                            <li><a href="#">Mis ordenes</a></li>
                                            <li><a href="#">Pendientes</a></li>
                                            <li><a href="#">Comprados</a></li>
                                            <li><a href="#">Lista de Deseos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="ps-footer--block">
                                        <h5 class="ps-block__title">ClicIT</h5>
                                        <ul class="ps-block__list">
                                            <li><a href="#">Afiliate</a></li>
                                            <li><a href="#">Registrate</a></li>
                                            <li><a href="#">Descuentos</a></li>
                                            <li><a href="#">Nuestros Productos</a></li>
                                            <li><a href="#">Compra</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-footer--bottom">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>Copyright © 2021 ClicIT. Derechos Reservados</p>
                        </div>
                        <div class="col-12 col-md-6 text-right"><img src="img/payment.png" alt><img class="payment-light" src="img/payment-light.png" alt></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="ps-navigation--footer">
        <div class="ps-nav__item"><a href="#" id="open-menu"><i class="icon-menu"></i></a><a href="#" id="close-menu"><i class="icon-cross"></i></a></div>
        <div class="ps-nav__item"><a href="./"><i class="icon-home2"></i></a></div>
        <div class="ps-nav__item"><a href="m"><i class="icon-user"></i></a></div>
        <div class="ps-nav__item"><a href=""><i class="fa fa-heart-o"></i><span class="badge">0</span></a></div>
        <div class="ps-nav__item"><a href=""><i class="icon-cart-empty"></i><span class="badge">0</span></a></div>
    </div>
    <div class="ps-menu--slidebar">
        <div class="ps-menu__content">
            <ul class="menu--mobile">
                <!--
                <li class="menu-item-has-children"><a href="#">Products</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="#"></a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="category-list.html"></a></li>
                                <li><a href="category-list.html"></a></li>
                                <li><a href="category-list.html"></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#"> </a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </li>
                -->
                <li class="menu-item-has-children"><a href="">LAPTOPS Y TABLETS</a></li>
                <li class="menu-item-has-children"><a href="">COMPUTADORAS</a></li>
                <li class="menu-item-has-children"><a href="">PARTES DE PC</a></li>
                <li class="menu-item-has-children"><a href="">MONITORES Y MÁS</a></li>
                <li class="menu-item-has-children"><a href="">IMPRESORAS Y MÁS</a></li>
                <li class="menu-item-has-children"><a href="">CONTACTENOS</a></li>
            </ul>
        </div>
        <div class="ps-menu__footer">
            <div class="ps-menu__item">
                <div class="ps-menu__contact">Llamanos: <strong>(+51) 928 214 454</strong></div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="plugins/jquery.min.js"></script>
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/bootstrap4/js/bootstrap.min.js"></script>
    <script src="plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/noUiSlider/nouislider.min.js"></script>
    <!-- custom code-->
    <script src="js/main.js"></script>
</body>

</html>