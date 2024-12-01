<?php
require_once 'EquipamientoDecorator.php';

class Escudo extends EquipamientoDecorator {
    public function getDescripcion(): string {
        return $this->personaje->getDescripcion() . ", con Escudo";
    }

    public function getPoder(): int {
        return $this->personaje->getPoder() + 15;
    }
}
?>
