let peso = parseInt(prompt("pon el peso en gramos"));
let precio =0;
let ubicacion =  prompt("Por favor, selecciona el destino:\n1. Asia\n2. Europa\n3. Ocenia\n4. Africa\n5. America")

if ( ubicacion = "5"){
    precio= peso *11;
}
else if ( ubicacion = "4"){
    precio= peso *10;
}
if ( ubicacion = "3"){
    precio= peso *12;
}
if ( ubicacion = "2"){
    precio= peso *24;
}
if ( ubicacion = "1"){
    precio= peso *27;
}
document.getElementById("entrada").innerHTML= ` el destino es  ${ubicacion} y el peso es de  ${peso/ 1000} Kg`;
if (peso >5000){
    document.getElementById("salida").innerHTML= `error demasiado peso`;
}else{
document.getElementById("salida").innerHTML= ` el precio del transporte es de ${precio}€`;
}