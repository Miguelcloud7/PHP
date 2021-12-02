$(document).ready(function() {
    let contG = 1;
    let data = { "contadorG": contG }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
})