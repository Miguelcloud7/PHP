<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link rel="shortcut icon" href="../img/logoEkiria.png">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="../css/Menu/styleMenuUsuario.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('estilo')

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
    <script src="../js/Menu/jsMenuL.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- complementos de las paginas --}}
            <!-- carrito de compras  -->
<div class="offcanvas offcanvas-top carrito" tabindex="1" id="Carrito" aria-labelledby="offcanvasTopLabel" style="height: auto; max-height: 500px; width: 80%; left: 10%;">
    <div class="offcanvas-header">
       <h5 id="offcanvasTopLabel">Carrito de Compras</h5>
       <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
       <table class="table table-striped">
          <thead>
             <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Servicio</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
             </tr>
          </thead>
          <tbody>
             <tr>
                <th scope="row">1</th>
                <td><img src="../img/Ventas/uña1.jfif" class="" width="150" height="100"></td>
                <td>Uñas Sencillas</td>
                <td>$15000</td>
                <td>
                   <div class="borrarCarro">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash-fill " viewBox="0 0 16 16">
                         <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg>
                   </div>
                </td>
             </tr>
             <tr>
                <th scope="row">2</th>
                <td><img src="../img/Ventas/uña1.jfif" class="" width="150" height="100"></td>
                <td>Uñas Sencillas</td>
                <td>$15000</td>
                <td>
                   <div class="borrarCarro">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash-fill " viewBox="0 0 16 16">
                         <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg>
                   </div>
                </td>
             </tr>
             <tr>
                <th scope="row">3</th>
                <td><img src="../img/Ventas/uña1.jfif" class="" width="150" height="100"></td>
                <td>Uñas Sencillas</td>
                <td>$15000</td>
                <td>
                   <div class="borrarCarro">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash-fill " viewBox="0 0 16 16">
                         <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg>
                   </div>
                </td>
             </tr>
             <tr>
                <th scope="row">4</th>
                <td><img src="../img/Ventas/uña1.jfif" class="" width="150" height="100"></td>
                <td>Uñas Sencillas</td>
                <td>$15000</td>
                <td>
                   <div class="borrarCarro">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash-fill " viewBox="0 0 16 16">
                         <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg>
                   </div>
                </td>
             </tr>
          </tbody>
       </table>
       <div class="botonesCarrito container">
          <div class="row">
             <div class="col"><a type="button" class="d-grid gap-2 btn btn-outline-secondary" data-bs-dismiss="offcanvas" aria-label="Close">Seguir Comprando</a></div>
             <div class="col"><a href="{% url 'TerminarPedido' %}" type="button" class="d-grid gap-2 btn btn-success">Terminar Pedido</a></div>
          </div>
       </div>
    </div>
 </div>

     <!-- Modal -->
  <div class="modal fade" id="VerMasServivios" tabindex="5" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Uñas sencillas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col"><img src="../img/Ventas/uña1.jfif" alt=""></div>
            <div class="col"><h5>Te presentamos un estilo coqueto donde cada uña de tu mano podrá tener un estilo único podrás elegir donde 2 uñas tendrán un color sólido, dos uñas tendrán dibujos, y una uña tendrá un color brillante </h5></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark d-grid gap-2" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
