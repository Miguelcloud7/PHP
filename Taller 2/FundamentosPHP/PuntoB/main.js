$(document).ready(function() {
    let contB = 1;
    data = { "contadorB": contB }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
    $("#formIva").submit(function() {
        var siniva = { "total": $("#total").val(), "desc": $('#desc').val()}
            $.ajax({
                data: siniva,
                url: 'iva.php',
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