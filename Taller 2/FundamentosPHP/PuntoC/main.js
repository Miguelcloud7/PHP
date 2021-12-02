$(document).ready(function() {
    let contC = 1
    let data = { "contadorC": contC }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
})