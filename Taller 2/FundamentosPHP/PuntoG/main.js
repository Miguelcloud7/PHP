$(document).ready(function() {
    let contG = 1;
    let data = { "contadorG": contG }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
    $("#formulario").submit(function() {
        let datos = { "dato": $("#dat1").val() }
        $.ajax({
            data: datos,
            url: "proceso.php",
            type: "POST",
            success: function(data) {
                $("#texto").html(data)
            }
        })
        return false
    })
})