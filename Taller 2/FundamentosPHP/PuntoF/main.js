$(document).ready(function() {
    contF = 1;
    data = { "contadorF": contF }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
})