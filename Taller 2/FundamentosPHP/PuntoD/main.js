$(document).ready(function() {
    let contD = 1;
    let data = { "contadorD": contD }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
})