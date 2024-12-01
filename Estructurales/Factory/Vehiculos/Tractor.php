<?php 

require_once "Vehiculo.php";

class Tractor implements Vehiculo {
    public function crear(){
        return "Creamos un tractor";
    }
}

?>