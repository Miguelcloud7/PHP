$(document).ready(function() {
    let contA = 1;
    let data = { "contadorA": contA }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
    $("#formSuma").submit(function() {
        var numeros = { "num1": $("#num1").val(), "num2": $("#num2").val(), "num3": $("#num3").val() }
            $.ajax({
                data: numeros,
                url: 'funcion.php',
                type: 'POST',
                success: function(data) {
                    if(!data.respuesta){
                        for(let k in data.errores){
                            $("span[data-key='"+k+"']").text(data.errores[k])
                          }
                    }
                    else{
                        $("#resultado").val(data.nft)
                    }
                },
                dataType: "json"

            });
            return false;
        
       
    })
});