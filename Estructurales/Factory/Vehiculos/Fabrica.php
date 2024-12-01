<?php 
require_once 'Carro.php';
require_once 'Moto.php';
require_once 'Tractor.php';
require_once 'Fabrica.php';

class Fabrica {
    public static function crearVehiculo($tipo) {
        switch($tipo) {
            case "carro":
                return new Carro();
            case "moto":
                return new Moto();
            case "tractor":
                return new Tractor();
            default:
                echo "Tipo recibido: $tipo<br>"; // Depuración
                throw new Exception("Tipo de vehículo no válido");
        }    
    }
}

?>  