<?php
session_start();
if(!isset($_SESSION['Valida'])){
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
              <label for="exampleInputEmail1" class="form-label">Salario del empleado</label>
              <input type="number" class="form-control" id="salE" name="salE">
              <span data-key="salE" class="badge bg-danger">rtere</span>
              <br>
              <label for="exampleInputEmail1" class="form-label">Valor de ahorro mensual</label>
              <input type="number" class="form-control" id="ahorroMensE" name="ahorroMensE">
              <span data-key="ahorroMensE" class="badge bg-danger">rer</span>
              <br>
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar">
          </form>
          </div>

      <div id="colilla">
        <h1>COLILLA DE PAGO</h1>
      <p>
        hola
      </p>
      </div>

          <script> 
            $(document).ready(function(){
              $("#colilla").hide();
              let formulario = $("#formC");
              formulario.submit(function(){
                formulario.find('.bg-danger').text('');
                $.ajax({
                  url:"controlador.php",
                  method:"POST",
                  data:{salario:$("#salE").val(),ahorro:$("#ahorroMensE").val()},
                  success:function(resul){
                    alert(resul.errores)
                  }
                }); //finaliza el ajax
                return false

              });
            });
          </script>
</body>
</html>