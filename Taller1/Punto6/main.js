function numero(){
var n = document.getElementById("num").value;
    var i=0;
    while(i==n){
        for(i= 1 ; i<=n; i++){
            var multi = n*i;
            resultado+=multi
        }
    }
    document.getElementById("resul").value = resultado;
    document.getElementById("resul").innerHTML=resultado
}













/*def factorial(n):
    if n==0 or n==1:
        resultado=1
    elif n>1:
            resultado=n*factorial(n-1)
    return resultado

fact3=factorial(3)
print(fact3)*/
