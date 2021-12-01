var vo=0
var a=8
var t=5

function velocidad (){
 var veloit = vo + a * t
 var velomd = (vo + veloit)/2
 alert ("velocidad inicial es "+veloit+" velocidad media " + velomd)
}
$(document).ready(function() {
    document.getElementById("jq").innerHTML = "Version de jQuery 3.5.1"; 
  });