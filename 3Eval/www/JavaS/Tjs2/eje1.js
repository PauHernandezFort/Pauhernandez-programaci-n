let burguer=(prompt("Pon la burguer"));
let cantidad=parseInt(prompt("Pon la cantidad"));
let precio = 0 ;
if(burguer === "sencillo"){
  precio = (cantidad *20)*1.05;

}
else if(burguer === "doble"){
    precio = (cantidad *25)*1.05;
  
  }
  else if (burguer === "triple"){
    precio = (cantidad *28)*1.05;
  
  }
  
  
  document.getElementById("salida").innerHTML= ` el precio es ${precio}€`;
  document.getElementById("entrada").innerHTML= ` la burguer es ${burguer} y la canitdad es ${cantidad}`;