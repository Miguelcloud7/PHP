{% extends "Menu_Usuario.html" %} 

{% block head %}
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminar Pedido</title>
    <link rel="stylesheet" href="/static/Ventas/css/Ventas.css">
    <link rel="icon" href="/static/Proyecto_Ekiria/Img/Logo Ekiria.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>{% endblock head %}

{% block Contenido %}
<h1>Finalizar Compra</h1>

<div class="body">
  <form >
    <div class="row">
      <div class="col-6">
        <label class="label-control">Seleccione una fecha y hora para su cita:</label>
        <br><br>
        <input type="datetime-local" >
        <br><br>
        <label class="label-control">Descripción (Opcional):</label>
        <br>
        <textarea  cols="60" rows="10"></textarea>
        <br><br>
      </div>
      <div class="col-6">
        <section class="infoTerminar">
          <h4>Recuerde que los precios pueden variar para más información contáctanos al WhatsApp +57 3206374472  </h4>
        </section>
      </div>
      
      <a href="{% url 'calendario' %}" class="btn btn-success">Agendar Cita</a>
    </div>
    
  </form>


  <br><br><br><br>
{% endblock Contenido %}