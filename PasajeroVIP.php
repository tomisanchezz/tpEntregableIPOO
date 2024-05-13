<?php

class Vip extends Pasajero{

    private $numeroViajeroFrecuente;
    private $cantidadMillasPasajero;

    public function __construct($nombre,$numeroAsiento,$numeroTicket,$numeroViajeroFrecuente,$cantidadMillasPasajero){
        parent :: __construct($nombre,$numeroAsiento,$numeroTicket);
        $this->numeroViajeroFrecuente = $numeroViajeroFrecuente;
        $this->cantidadMillasPasajero = $cantidadMillasPasajero;
    }


}