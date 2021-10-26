function convertToRoman() {
  let n = document.getElementById("num").value;
  var
  valores = [1, 5, 10, 50, 100, 500, 1000],
  letras = ['I', 'V', 'X', 'L', 'C', 'D', 'M'],
  res = [],
  num, letra

for(var i = 6; num = valores[i], letra = letras[i]; i--) {
  if(n >= num) {
    var r = Math.floor(n / num); 
    n -= r * num; 
    if(r < 4){
      while(r--){
        res.push(letra);
      }
    }
  }
} 
document.getElementById("romano").innerHTML = res
}