<?php

require_once 'Vehiculos/Fabrica.php';

try {
    $carro = Fabrica::crearVehiculo('carro');
    echo $carro->crear() . "<br>";

    $moto = Fabrica::crearVehiculo('moto');
    echo $moto->crear() . "<br>";

    $tractor = Fabrica::crearVehiculo('tractor');
    echo $tractor->crear() . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}


?>