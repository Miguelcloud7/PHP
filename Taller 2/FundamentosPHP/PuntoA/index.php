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
    <form id="formSuma"  class="suma" >
        <div class="color" >
            <div class="num">
                <p class="titulo" >Suma Tres Numeros
                    <input class="input" type="text" name="num1" id="num1" placeholder="Inserte el numero" required><br>
                    <span data-key="nota1" class="badge bg-danger"></span>
                    <input class="input" type="text" name="num2" id="num2" placeholder="Inserte el numero" required><br>
                    <span data-key="nota2" class="badge bg-danger"></span>
                    <input class="input" type="text" name="num3" id="num3" placeholder="Inserte el numero" required><br>
                    <span data-key="nota3" class="badge bg-danger"></span>
                </p>
                <hr>
                <div>
                    <button type="submit" class="boton">Calcular</button>
                </div>
                <input type="text" id="resultado">
            </div>
            <div class="icon" >
                <img class="imgSuma" src="img/suma.png" alt="">
            </div>
        </div>
        
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</body>
</html>