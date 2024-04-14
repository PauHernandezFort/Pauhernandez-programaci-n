let costeDeProduccion=0;
let clave= parseInt(prompt("pon la clave"));
let precioVenta = 0;

if(clave ===1){
    costeDeProduccion = (10*1.8)+ (10*1.28) + 10;
    precioVenta = costeDeProduccion *1.45;
}
else if(clave ===2){
    costeDeProduccion = (10*1.85)+ (10*1.30) + 10;
    precioVenta = costeDeProduccion *1.45;
}
else if(clave ===3){
    costeDeProduccion = (10*1.75)+ (10*1.35) + 10;
    precioVenta = costeDeProduccion *1.45;
}
else if(clave ===4){
    costeDeProduccion = (10*1.75)+ (10*1.28) + 10;
    precioVenta = costeDeProduccion *1.45;
}
else if(clave ===5){
    costeDeProduccion = (10*1.8)+ (10*1.30) + 10;
    precioVenta = costeDeProduccion *1.45;
}
else if(clave ===6){
    costeDeProduccion = (10*1.85)+ (10*1.35) + 10;
    precioVenta = costeDeProduccion *1.45;
}
document.getElementById("salida").innerHTML= ` el coste de produccion es ${costeDeProduccion}€ y el precio de venta es${precioVenta}`;
document.getElementById("entrada").innerHTML= ` el identificador es ${clave} `;