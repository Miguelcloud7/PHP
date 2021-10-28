
function mercancia(){
    const valores = window.location.search;
    const urlParams = new URLSearchParams(valores);

    
    var tipo = urlParams.get('tipo');
    var peso = urlParams.get('peso');
    var valor = urlParams.get('valor');
    var promo = urlParams.get('promo');
    var dia = urlParams.get('dia');
    
    if(peso<100){
        var tarifa=20000
    }
    else if(peso>=100 & peso<=150){
        var tarifa=25000
    }
    else if(peso>150 & peso<=200){
        var tarifa=30000
    }
    else if (peso==0){
        var tarifa=0
    }
    else if(peso>200){
        var tarifa=35000
        var pesod=peso-200
        var count=0
       while(pesod>9){
           count+=2000
           pesod=pesod-10
       }
        tarifa=tarifa+count
    }

   
        if(valor>=300000 & valor<=600000 & promo==="sin_promosion"){
            var des= tarifa*10/100
            var env =tarifa-des
        }else if(valor>600000  & valor<=1000000 & promo==="sin_promosion"){
            var des= tarifa*20/100
            var env =tarifa-des
        }else if(valor>1000000 & promo==="sin_promosion"){
            var des= tarifa*30/100
            var env =tarifa-des
        }else if(dia==7 & tipo==="almacen" & promo=="con_promosion"){
            var des= tarifa*50/100
            var env =tarifa-des
        }else if(tipo=="efectivo" & valor>1000000 & promo=="con_promosion"){
            var des= tarifa*60/100
            var env =tarifa-des
        }
    
    

   t.innerHTML="$"+tarifa
   vm.innerHTML="$"+valor
   de.innerHTML="$"+env
   var n1=parseInt(env)
   var n2=parseInt(valor)
    var total = n1+n2
   tt.innerHTML="$"+total
    event.preventDefault
    
}



