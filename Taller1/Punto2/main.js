function dias(){
    var diass =document.getElementById("d").value
    var meses = Math.round(diass / 31)
    var semanas= Math.round(diass / 7)
    var anios = Math.round(diass / 365)
    
    dia.innerHTML=diass
    mes.innerHTML=meses
    semana.innerHTML=semanas
    anio.innerHTML=anios

    event.preventDefault();     
}

