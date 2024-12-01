<?php
require_once 'EquipamientoDecorator.php';

class Armadura extends EquipamientoDecorator {
    public function getDescripcion(): string {
        return $this->personaje->getDescripcion() . ", con Armadura";
    }

    public function getPoder(): int {
        return $this->personaje->getPoder() + 30;
    }
}
?>
