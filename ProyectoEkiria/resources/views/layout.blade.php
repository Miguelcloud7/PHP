<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','Menu')</title>
    <link rel="shortcut icon" href="../img/logoEkiria.png">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="../css/Menu/styleMenuUsuario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Proveedores/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">



</head>
<!--                            Zona de menú Horizontal header tamaño maximo 50px                  -->
<header>
</header>

<body>

    <div class="grid">
        <!--          Creación del menú lateral        -->
        <div class="backnav">
            <nav class="nav">

                <div class="menul">
                    <!--Para usar los bloques li copiad y pegar toda la info, ademas agregad la clase activar a la parte donde esta parada-->

                    <!--           Zona de links de navegación     -->
                    <div class="Perfil">
                        <a href="">
                            <img src="../img/profile.png" class="foto_perfil">
                            <p>Nombre Usuario <sup>Rol</sup></p>
                        </a>
                        <br><br><br>
                        <button><a href="" style="color:#fff;"><i class="mdi mdi-power"></i></a></button>
                    </div>
                    <ul class="list_content">
                        <li class="list_item list_item--click">

                            <div class="list ">
                                <i class="mdi mdi-home"></i>
                                <a class="nav_link" href=""> Inicio</a>
                            </div>
                        </li>
                        <li class="list_item list_item--click">
                            <div class="list">
                                <i class="mdi mdi-view-dashboard"></i>
                                <a class="nav_link"> Configuración</a>
                                <i class="list_arrow mdi mdi-chevron-right"></i>
                            </div>
                            <ul class="list_show">
                                <li class="nav_link--inside"><a style="color:#fff;" href="">Administración de Usuarios</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;">Nombre Direccion</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;">Nombre Direccion</a></li>
                            </ul>
                        </li>
                        <li class="list_item list_item--click">
                            <div class="list">
                                <i class="mdi mdi-archive"></i>
                                <a class="nav_link"> Productos</a>
                                <i class="list_arrow mdi mdi-chevron-right"></i>
                            </div>
                            <ul class="list_show">
                                <li class="nav_link--inside"><a style="color:#fff;">Proveedor</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;">Productos</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;">Compras</a></li>
                            </ul>
                        </li>

                        <li class="list_item list_item--click">
                            <div class="list activar list_button--click">
                                <i class="mdi mdi-basket"></i>
                                <a class="nav_link"> Servicios</a>
                                <i class="list_arrow mdi mdi-chevron-right"></i>
                            </div>
                            <ul class="list_show">
                                <li class="nav_link--inside"><a style="color:#fff;" href="">Catalogo</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;" href="">Calendario</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;" href="">Finalizar compra</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;" href="">Servicios personalizados</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;" href="">Administración de ventas</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;" href="">Servicios</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;" href="">Citas</a></li>
                                <li class="nav_link--inside"><a style="color:#fff;" href="">Detalles de cita</a></li>
                                <br>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>

        <img href="" class="Logo" src="../img/LogoEkiria.png" width="179" height="50">
        <div class="toggle">
            <i class="abrir fas fa-bars"></i>
            <i class="cerrar fas fa-times"></i>
        </div>
        <div class="content">
            <div class="fondo"></div>
            <div class="menu">
                <ul>
                    <li><a class="links" href="#"><i class="mdi mdi-account-group" style="margin-top: -3px;"></i><p class="atext">Nosotros</p></a></li>
                    <div class="notification-box">
                        <ul class="list-inline mb-0">
                            <li>
                                <a href="javascript:void(0);" class="right-bar-toggle">
                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                </a>
                                <div class="noti-dot">
                                    <span class="dot"></span>
                                    <span class="pulse"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <li><a href="" type="button" class=" btn position-relative" data-bs-toggle="offcanvas" data-bs-target="#Carrito" aria-controls="offcanvasTop" style="margin-top: -7px;"><i class="fas fa-shopping-cart"></i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span></a></li>
                </ul>
            </div>

            <div id="div">
                @yield('contenido')
            </div>
        </div>
    </div>
    <script src="../js/jsMenuL.js"></script>
<script src="../js/proveedores/js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @yield('script')
</body>
</html>
