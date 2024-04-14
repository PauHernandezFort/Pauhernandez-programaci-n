let numeroDeVentas =  parseInt(prompt("pon el numero de ventas"));
let ventas = [];
let mayores1000=0;
let mayores500Menores1000=0;
let menores500=0;
let tMayores1000=0;
let tMayores500Menores1000=0;
let tMenores500=0;
for (let index = 0; index <numeroDeVentas ; index++) {
    ventas[index] =  parseInt(prompt(`pon la venta ${index +1}`));   
}
for (let index = 0; index < numeroDeVentas; index++) {
    if (ventas[index]>1000){
        mayores1000 +=1;
        tMayores1000 += ventas[index];
    }
   else if (ventas[index]<1000 && ventas[index] >500 ){
        mayores500Menores1000 +=1;
        tMayores500Menores1000 += ventas[index];
    }
    else if (ventas[index]<=500 ){
       menores500 +=1;
       tMenores500 += ventas[index];
    }
        
    
}
document.getElementById("salida").innerHTML= ` ventas mayores a 1000 hay ${mayores1000} y el total es de ${tMayores1000} ventas mayores a 500 y menores a 1000 hay ${mayores500Menores1000} y el total es de ${tMayores500Menores1000} y ventas menor o iguales a 500 hay ${menores500} y el total es de ${tMenores500}`;
document.getElementById("entrada").innerHTML= `el numero de ventas es de  ${numeroDeVentas}`;