function numero(){
let n = document.getElementById("num").value;
    var multi = 1
    if(n>1){
        for(var i=1 ; i<=n; i++){
            multi = multi * i
            var resultado =+ /*math*/ (multi)
        }
        //var gomita = toArray(resultado)
        document.getElementById("resul").value = resultado
    }
    else {
        document.getElementById("resul").value=n
    }
    event.preventDefault(); 
}

$(document).ready(function() {
    document.getElementById("jq").innerHTML = "Version de jQuery 3.5.1"; 
  });










/*def factorial(n):
    if n==0 or n==1:
        resultado=1
    elif n>1:
            resultado=n*factorial(n-1)
    return resultado

fact3=factorial(3)
print(fact3)*/
