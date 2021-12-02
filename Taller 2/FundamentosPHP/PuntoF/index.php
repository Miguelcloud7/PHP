<?php
session_start();
if(!isset($_SESSION['Valida'])){
    header("location:../index.php");
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto F</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../perfil.php">Hola <?php echo ucfirst($_SESSION['Valida']['nombre'])?></a>
        <a class="nav-link" href="../cerrarSesion.php">Cerrar Sesion</a>
        
      </div>
    </div>
  </div>
</nav>
  <div class="container">
  <form id="formC">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Precio del computador</label>
              <input type="number" class="form-control" id="precio" name="precio">
              <span data-key="precio" class="badge bg-danger">sds</span>
              <br>
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar">
            <br>
            <br>
            <br>
            <input type="text" id="resultado" class="form-control" readonly>
          </form>
  </div>
  <script>
  $(document).ready(function(){
    $("#formC").submit(function(){
      var data = {"precio":$("#precio").val()}
      $.ajax({
          data: data,
          url: 'controlador.php',
          type: 'POST',
          success: function(data) {
              $("#resultado").val(data)
            }
            });
        return false;
      })
    })
</script>
<script src="main.js"></script>

</body>
</html>