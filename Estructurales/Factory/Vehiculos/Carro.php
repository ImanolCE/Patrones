<?php 

require_once 'Vehiculo.php';

class Carro implements Vehiculo {
    public function crear() {
        return "Creamos un carro";
    }
} 

?>