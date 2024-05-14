<?php

include "Viaje.php";

$objPasajero = new Pasajero("tomas",242,444);
$objPasajero1 = new Pasajero("Emilia",767,989);

$pasajeroVip= new Vip("EStefi",555,000,5,400);
$pasajeroVip1= new Vip("Gael",111,777,4,100);
$pasajeroVip2= new Vip("norma",33,1,998,200);

$pasajeroNecesidad1= new PasajeroConNecesidades("Ester",0,4,true,true,true);
$pasajeroNecesidad2= new PasajeroConNecesidades("carlos",0,4,false,true,true);
$pasajeroNecesidad3= new PasajeroConNecesidades("mario",0,4,false,true,false);

$viaje= new Viaje(666,"Madrid",100,[],"Pepe",2000);

$vender = $viaje->venderPasaje($objPasajero);
$vender1 = $viaje->venderPasaje($objPasajero1);


$vender2 = $viaje->venderPasaje($pasajeroVip);
$vender3 = $viaje->venderPasaje($pasajeroVip1);
$vender4 = $viaje->venderPasaje($pasajeroVip2);

$vender5 = $viaje->venderPasaje($pasajeroNecesidad1);
$vender6 = $viaje->venderPasaje($pasajeroNecesidad2);
$vender7 = $viaje->venderPasaje($pasajeroNecesidad3);

$venderr=[$vender,$vender1,$vender2,$vender3,$vender4,$vender5,$vender6];

if($venderr != 0){
    echo "se vendieron los pasaje \n";
}else{
    echo "no se vendio el pasaje \n";
}
