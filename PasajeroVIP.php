<?php

class Vip extends Pasajero{

    private $numeroViajeroFrecuente;
    private $cantidadMillasPasajero;

    public function __construct($nombre,$numeroAsiento,$numeroTicket,$numeroViajeroFrecuente,$cantidadMillasPasajero){
        parent :: __construct($nombre,$numeroAsiento,$numeroTicket);
        $this->numeroViajeroFrecuente = $numeroViajeroFrecuente;
        $this->cantidadMillasPasajero = $cantidadMillasPasajero;
    }

    public function getMilla(){
        return $this->cantidadMillasPasajero;
    }
    public function getNumeroViajero(){
        return $this->cantidadMillasPasajero;
    }


    public function darPorcentajeIncremento(){
        $porcentajeDees= 35;
        $milas =$this->getMilla();
        if($milas > 300){
            $porcentajeDees= 30;
        }
        return $porcentajeDees;
}
public function __toString()
{
    $cadena = parent::__toString();
    $cadena .= "Numero Viajero: ".$this->getNumeroViajero()."\n". "Cantidad millas: ".$this->getMilla()."\n";
    return $cadena;
}

     


}