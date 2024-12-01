<?php 

require_once 'Vehiculo.php';

class Moto implements Vehiculo {
    public function crear() {
        return "Creamos una moto";
    }
}

?>