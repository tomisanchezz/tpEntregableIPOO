<?php

class Pasajero{

    private $nombre;
    private $numeroAsiento;
    private $numeroTicket;

    public function __construct($nombre,$numeroAsiento,$numeroTicket)
    {
        $this->nombre = $nombre;
        $this->numeroAsiento = $numeroAsiento;
        $this->numeroTicket = $numeroTicket;
    }
    public function getNombre() {
        return $this->nombre;
    }

    // Setter para $nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter para $numeroAsiento
    public function getNumeroAsiento() {
        return $this->numeroAsiento;
    }

    // Setter para $numeroAsiento
    public function setNumeroAsiento($numeroAsiento) {
        $this->numeroAsiento = $numeroAsiento;
    }

    // Getter para $numeroTicket
    public function getNumeroTicket() {
        return $this->numeroTicket;
    }

    // Setter para $numeroTicket
    public function setNumeroTicket($numeroTicket) {
        $this->numeroTicket = $numeroTicket;
    }

    public function darPorcentajeIncremento(){
        $porcjIncremento= 10;
        return $porcjIncremento;
    }

    public function __toString()
    {
        return 
        "Nombre: ".$this->getNombre()."\n".
        "Num Asiento: ".$this->getNumeroAsiento()."\n".
        "Numero Ticket: ".$this->getNumeroTicket()."\n";
    }




}