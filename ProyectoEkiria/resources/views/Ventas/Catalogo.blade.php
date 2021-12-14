@extends('layout')
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Catalogo</title>
   <link rel="stylesheet" href="../css/Ventas/Ventas.css">
   <link rel="icon" href="/static/Proyecto_Ekiria/Img/LogoEkiria.png">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
   <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.css">

</head>


<!--     Empieza el contenido del catalogo    -->
@section('contenido')
<h1>Catalogo</h1>
<!-- Servicios del catalogo -->
<div class=" body ">
   <div class="card">
      <i>
         <h2 class="precio"></h2>
      </i>
      <div class="imgs"><a href="{%url 'personalizar'%}"><img class="Imas" src="../img/Ventas/masMorado.png" alt=""></a></div>
      <div class="contenedor-botones">
         <a class="botonC Personalizar" href="{%url 'personalizar'%}"><span>Personalizar</span></a><!--sI EL AZUL PERSISTE COLOCAR EL COLOR AQUI -->
      </div>
   </div>
   <div class="card">
      <i>
         <h2 class="precio">$15000</h2>
      </i>
      <div class="img"><img src="../img/Ventas/uña2.jfif" alt=""></div>
      <h2 class="nombreP text-center">Uñas de Halloween</h2>
      <p class="linea"></p>
      <div class="contenedor-botones">
         <a class="botonC Comprar"type="button" data-bs-toggle="offcanvas" data-bs-target="#Carrito" aria-controls="offcanvasTop">
            <div  class="iconoC">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
               </svg>
            </div>
            <span>Comprar</span>
         </a>
         <button class="botonC VerM" data-bs-toggle="modal" data-bs-target="#VerMasServivios"><span>Ver mas</span></button>
      </div>
   </div>
   <div class="card">
      <i>
         <h2 class="precio">$15000</h2>
      </i>
      <div class="img"><img src="../img/Ventas/uña3.jfif" alt=""></div>
      <h2 class="nombreP text-center">Uñas de flores</h2>
      <p class="linea"></p>
      <div class="contenedor-botones">
         <a class="botonC Comprar" type="button" data-bs-toggle="offcanvas" data-bs-target="#Carrito" aria-controls="offcanvasTop">
            <div  class="iconoC">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
               </svg>
            </div>
            <span>Comprar</span>
         </a>
         <button class="botonC VerM" data-bs-toggle="modal" data-bs-target="#VerMasServivios"><span>Ver mas</span></button>
      </div>
   </div>
   <div class="card">
      <i>
         <h2 class="precio">$15000</h2>
      </i>
      <div class="img"><img src="../img/Ventas/uña4.jfif" alt=""></div>
      <h2 class="nombreP">Uñas con puntos </h2>
      <p class="linea"></p>
      <div class="contenedor-botones">
         <a class="botonC Comprar" type="button" data-bs-toggle="offcanvas" data-bs-target="#Carrito" aria-controls="offcanvasTop">
            <div  class="iconoC">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
               </svg>
            </div>
            <span>Comprar</span>
         </a>
         <button class="botonC VerM" data-bs-toggle="modal" data-bs-target="#VerMasServivios"><span>Ver mas</span></button>
      </div>
   </div>
   <div class="card">
      <i>
         <h2 class="precio">$15000</h2>
      </i>
      <div class="img"><img src="../img/Ventas/uña1.jfif" alt=""></div>
      <h2 class="nombreP">Uñas sencillas</h2>
      <p class="linea"></p>
      <div class="contenedor-botones">
         <a class="botonC Comprar" type="button" data-bs-toggle="offcanvas" data-bs-target="#Carrito" aria-controls="offcanvasTop">
            <div  class="iconoC">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
               </svg>
            </div>
            <span>Comprar</span>
         </a>
         <button class="botonC VerM" data-bs-toggle="modal" data-bs-target="#VerMasServivios"><span>Ver mas</span></button>
      </div>
   </div>
</div>

 <br><br><br><br>



@endsection




<!-- scripts -->





