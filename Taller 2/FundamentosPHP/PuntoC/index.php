<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto C</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="../dashboard.php">Regresar</a>
              <a class="nav-link" href="../cerrarSesion.php">Cerrar Sesion</a>
              
            </div>
          </div>
        </div>
      </nav>
    <div class="container">
        <h1>Punto C | Digite los datos: </h1>
        <form id="formC">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nota 1</label>
              <input type="number" class="form-control" id="n1">
              <span data-key="nota1" class="badge bg-danger"></span>
              <br>
              <label for="exampleInputEmail1" class="form-label">Nota 2</label>
              <input type="number" class="form-control" id="n2">
              <label for="exampleInputEmail1" class="form-label">Nota 3</label>
              <input type="number" class="form-control" id="n3">
              <label for="exampleInputEmail1" class="form-label">Nota Examen Final</label>
              <input type="number" class="form-control" id="ef">
              <label for="exampleInputEmail1" class="form-label">Nota Trabajo Final</label>
              <input type="number" class="form-control" id="tf">
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar">
          </form>
    </div>
    <script>
        $(document).ready(function(){
            $("#formC").submit(function(){
                var notas = {"n1":$("#n1").val(),"n2":$("#n2").val(),"n3":$("#n3").val(),"ef":$("#ef").val(),"tf":$("#tf").val()}
                if(notas.n1!=""&&notas.n2!=""&&notas.n3!=""&&notas.ef!=""&&notas.tf!=""){
                  formula.find('badge bg-danger').text('');
                  $.ajax({
                    data:notas,
                    url:'controlador.php',
                    type:'POST',
                    success:function(resp){
                    console.log(resp.errores)
                    if(!resp.respuesta){
                    for(let k in resp.errores){
                      $("span[data-key='"+k+"']").text(resp.errores[k]);
                  }
                }
              },
              dataType: "json"
                    
                  })
                  
                }
            });
            return fa
        });
    </script>
</body>
</html>