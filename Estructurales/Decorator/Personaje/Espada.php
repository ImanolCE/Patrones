<?php
//Decorador que añade una espada al personaje
require_once 'EquipamientoDecorator.php';

class Espada extends EquipamientoDecorator {
    public function getDescripcion(): string {
        return $this->personaje->getDescripcion() . ", con Espada";
    }

    public function getPoder(): int {
        return $this->personaje->getPoder() + 20;
    }
}
?>
