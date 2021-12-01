<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
|   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Ejercicio 4 notas</title>
</head>
<body>
<div class="container">
<form id="notas" class="con-m">

        <input type="text" name="n1" id="nota1" placeholder="Ingrese la nota 1: " class="form-control form-control-sm">
        <br>
       
        <input type="text" name="n2" id="nota2" placeholder="Ingrese la nota 2: " class="form-control form-control-sm">
        <br>
       
        <input type="text" name="n3" id="nota3" placeholder="Ingrese la nota 3: " class="form-control form-control-sm">
        <br>
       
        <input type="text" name="n4" id="nota4" placeholder="Ingrese la nota 4: " class="form-control form-control-sm">
        <br>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <br>
        <textarea name="cont" id="cont" style="width: 300px; height: 150px;"></textarea>
      
</form>
</div>
<script src="main.js"></script>
</body>
</html>