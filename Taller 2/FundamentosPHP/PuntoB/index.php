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
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<<<<<<< HEAD
<title>Calcula Iva</title>
=======
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Document</title>
>>>>>>> c30c15f5fd108151cc7a00a56cff64b68b049e49
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
    <form id="formIva"  class="suma" >
        <div class="color" >
            <div class="num">
                <p class="titulo" >Calculemos el iva</p>
                    <br>
                    <label class="form-label">Ingrese El valor de la Factura</label><br>
                    <input class="inputiva" type="text" name="total" id="total" required><br>
                    <span data-key="total" class="badge bg-danger"></span>
                    <label for="form-label">┬┐Aplicamos el 10%?</label>
                    <input type="text" name="desc" id="desc">
                    <span data-key="desc" class="badge bg-danger"></span>
                    <div>
                    <button type="submit" class="boton">Calcular</button>
                    </div>
                    <br>
                    <hr>
                    <label for="form-label">Resultado</label><br>
                    <input class="input" type="text" id="resultado">
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>
</html>