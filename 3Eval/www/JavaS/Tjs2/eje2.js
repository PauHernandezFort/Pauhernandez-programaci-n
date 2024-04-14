let visitas = parseInt(prompt("pon el numero de visitas"));
let precio = 0;
let cita = 0
if(visitas <=3){
   precio= visitas* 200; 
   cita = 200;
}
else if (visitas <=5){
    precio = (visitas-3) *150 + 600;
    cita = 150;
}
else if (visitas <= 8){
    precio = (visitas - 5) *100 +900; 
    cita = 100;
}
else {
    precio = (visitas - 8) *50 + 1200;
    cita = 50;
}
document.getElementById("salida").innerHTML= ` el precio total del tratamiento es ${precio}€ y la de la visita actual es ${cita}`;
document.getElementById("entrada").innerHTML= ` el numero de vistias es ${visitas} `;