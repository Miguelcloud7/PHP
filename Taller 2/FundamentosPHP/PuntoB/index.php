<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    
    <title>Document</title>
</head>
<body>
    <form id="formIva"  class="suma" >
        <div class="color" >
            <div class="num">
                <p class="titulo" >Calculemos el iva</p>
                    <br>
                    <label class="form-label">Ingrese El valor de la Factura</label>
                    <input class="input" type="text" name="total" id="total" required><br>
                    <div>
                    <button type="submit" class="boton">Calcular</button>
                    </div>
                    <br>
                    <hr>
                    <label for="">Resultado</label>
                    <input class="input" type="text" id="resultado">
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>
</html>