let tipo =  prompt("pon el tipo de tarjeta");
let limite2 =  parseInt(prompt("pon el limite de la tarjeta"));
let limite  = parseInt(limite2);
if(tipo === 1){
    limite * 1.25;
}
else if(tipo === 2){
    limite *= 1.35;
}
else if(tipo === 3){
    limite *= 1.4;
}
else{
    limite *= 1.5;
}
document.getElementById("salida").innerHTML= ` el nuevo limite es de ${limite}€`;
document.getElementById("entrada").innerHTML= ` el tipo es ${tipo} el antiguo limite es de ${limite2}`;