function calculo(){ 
    var input = document.getElementById("entrada").value
    var respuesta = input / 3.6
    respu = respuesta+" m/s"
    document.getElementById("resultado").value=respu
    event.preventDefault();
}
