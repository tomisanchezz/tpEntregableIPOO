<?php 


include_once 'Pasajero.php';
include_once 'PasajeroConNecesidades.php';
include_once 'PasajeroVIP.php';


class Viaje { 
    // atributos
    private $codigoViaje;
    private $destino;
    private $cantidadMaximaPasajeros;
    private $coleccionPasajeros;   
    private $responsableViaje;
    private $costoViaje;
    private $pasajesVendidosCOrrectamente;  
    // constructor 
    public function __construct($codigoViaje , $destino , $cantidadMaximaPasajeros , $coleccionPasajeros , $responsableViaje , $costoViaje) {
        $this->codigoViaje = $codigoViaje;
        $this->destino = $destino;
        $this->cantidadMaximaPasajeros = $cantidadMaximaPasajeros;
        $this->coleccionPasajeros = $coleccionPasajeros;
        $this->responsableViaje = $responsableViaje;
        $this->costoViaje = $costoViaje;
        $this->pasajesVendidosCOrrectamente = 0;
    }
    // getters
    public function getCodigoViaje() {
        return $this->codigoViaje;
    }
    public function getDestinoViaje() {
        return $this->destino;
    }
    public function getCantidadMaximaPasajeros() {
        return $this->cantidadMaximaPasajeros;
    }
    public function getColeccionPasajeros() {
        return $this->coleccionPasajeros;
    }
    public function getResponsableViaje() {
        return $this->responsableViaje;
    }
    public function getCostoViaje() {
        return $this->costoViaje;
    }
    public function getpasajesVendidosCOrrectamente() {
        return $this->pasajesVendidosCOrrectamente;
    }
    // setters
    public function setCodigoViaje($codigo) {
    	$this->codigoViaje = $codigo;
    }
    public function setDestinoViaje($destino) {
    	$this->destino = $destino;
    }
    public function setCantidadMaximaPasajeros($num) {
    	$this->cantidadMaximaPasajeros = $num;
    }
    public function setColeccionPasajeros($coleccion) {
    	$this->coleccionPasajeros = $coleccion;
    }
    public function setResponsableViaje($responsableViaje) {
        $this->responsableViaje = $responsableViaje;
    }
    public function setCostoViaje($costo) {
        $this->costoViaje = $costo;
    }
    public function setpasajesVendidosCOrrectamente($suma) {
        $this->pasajesVendidosCOrrectamente = $suma;
    }

    public function hayPasajesDisponibles(){
        $cantMax= $this->getCantidadMaximaPasajeros();
        $colPasajeros= $this->getColeccionPasajeros();
        $disponible= false;
        if($cantMax > count($colPasajeros)){
            $disponible = true;
        }
        return $disponible;
    }

    public function venderPasaje($objPasajero){
        $colPasajeros= $this->getColeccionPasajeros();
        $disponible = $this->hayPasajesDisponibles();
        
        //VERIFICAR SI EL PASAJE ESTA VENDIDO 
        if($disponible == true){
        $tikcet= $objPasajero->getNumeroTicket();
        $i=0;
        $vendido=false;
        while($vendido ==false && count($colPasajeros) > $i){
            if($colPasajeros[$i]->getNumeroTicket() == $tikcet){
                $vendido = true;
            }
        }

        if($vendido == false){//vender pasaje
            if($objPasajero instanceof Vip || $objPasajero instanceof PasajeroConNecesidades || $objPasajero instanceof Pasajero){
                $costoViaje =$this->getCostoViaje();
                $descuento= $objPasajero->darPorcentajeIncremento();
                $importeIncrementar = ($costoViaje*$descuento)/100;
                $importeFinal= $costoViaje + $importeIncrementar;
            }
         $vendidosPasajes= $this->getpasajesVendidosCOrrectamente();
        $vendidosPasajes ++ ;
        $this->setpasajesVendidosCOrrectamente($vendidosPasajes);
        }   
    }

        return $importeFinal;

    }
    public function pasajero() {
        $coleccionPasajeros = $this->getColeccionPasajeros();
        $m = "";
        foreach ($coleccionPasajeros as $pasajero) {
            $m .= $pasajero . "\n";
        }
        return $m;
    }
    public function __toString() {
        return (string)
        "Codigo de Viaje: " . $this->getCodigoViaje() . "\n" .
        "Destino: " . $this->getDestinoViaje() . "\n" .
        "Cantidad Maxima de Pasajeros: " . $this->getCantidadMaximaPasajeros() . "\n" .
        "Responsable del Viaje: " . $this->getResponsableViaje() . "\n" .
        "Costo del Viaje: " . $this->getCostoViaje() . "\n" .
        "Suma de Pasajes Vendidos correctamente: " . $this->getpasajesVendidosCOrrectamente() . "\n" .
        "Pasajeros -> " . "\n" . $this->pasajero() . "\n";
    }

  
                                       
}