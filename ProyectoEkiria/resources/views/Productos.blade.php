{%extends 'Menu_Usuario.html'%}

    {% block head %}
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Proveedores</title>
       {% include 'modals.html' %}
       <link rel="stylesheet" href="/static/Modulo_compras/css/style.css">
       <link rel="icon" href="/static/Proyecto_Ekiria/Img/Logo Ekiria.png">
       <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
       <link rel="stylesheet" href="/static/bootstrap/css/bootstrap.css">
       <script src="/static/bootstrap/js/bootstrap.js"></script>
    </head>
    {% endblock head %}
   

         
                {% block Contenido %}
                 
                  <div class="container">
                    <main>
                        <a href="#" class="logotipo" id="logotipo">
                            <div class="texto-animado" id="logo">PRODUCTOS</div>
                         </a>
                    </main>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar_prod" style="margin-left: 96%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                        </button>
                    {%include 'tabla_prod.html' %}
                  </div>
                {% endblock Contenido %}
             
         
        <div class="toggle">
            <i class="abrir fas fa-bars"></i>
            <i class="cerrar fas fa-times"></i>
        </div>
    

{%block scripts%}
<script src="/static/Proyecto_Ekiria/js/jsMenuL.js"></script>
<script src="/static/Modulo_compras/js/js.js"></script>

{%endblock scripts%}

</html>