<?php

 
class PasajeroConNecesidades extends Pasajero{

    private $requiereSilla;
    private $requiereAsistencia;
    private $comidaEspecial;

    public function __construct($nombre,$numeroAsiento,$numeroTicket,$requiereAsistencia,$requiereSilla,$comidaEspecial){
        
        parent :: __construct($nombre,$numeroAsiento,$numeroTicket);
        $this->requiereAsistencia= $requiereAsistencia;
        $this->requiereSilla=$requiereSilla;
        $this->comidaEspecial= $comidaEspecial;



    }

    public function getRequiereSilla() {
        return $this->requiereSilla;
    }

    // Setter para $requiereSilla
    public function setRequiereSilla($requiereSilla) {
        $this->requiereSilla = $requiereSilla;
    }

    // Getter para $requiereAsistencia
    public function getRequiereAsistencia() {
        return $this->requiereAsistencia;
    }

    // Setter para $requiereAsistencia
    public function setRequiereAsistencia($requiereAsistencia) {
        $this->requiereAsistencia = $requiereAsistencia;
    }

    // Getter para $comidaEspecial
    public function getComidaEspecial() {
        return $this->comidaEspecial;
    }

    // Setter para $comidaEspecial
    public function setComidaEspecial($comidaEspecial) {
        $this->comidaEspecial = $comidaEspecial;
    }

    public function darPorcentajeIncremento()
    {
        $desuento=0;
        $asistenca=$this->getRequiereAsistencia();
        $silla=$this->getRequiereSilla();
        $comida= $this->getComidaEspecial();
        $especial = [$asistenca,$silla,$comida];

        if($especial == true ){
            $desuento= 30;
        }elseif($silla = true){
            $desuento= 10;
        }elseif($comida = true){
            $desuento= 10;
        }elseif($asistenca = true){
            $desuento= 10;
        }
        return $desuento;
    }

    public function __toString()
    {
    
    $cadena = parent::__toString();
    $cadena .= "Requiere asistencia: ".$this->getRequiereAsistencia()."\n". "Requiere silla: ".$this->getRequiereSilla()."\n"."Requiere Comida especial".$this->getComidaEspecial()."\n";
    return $cadena;
}


}