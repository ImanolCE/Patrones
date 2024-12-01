<?php

// Clase abstracta que serve como base para los decoradores
abstract class EquipamientoDecorator {
    protected $personaje;

    public function __construct($personaje) {
        $this->personaje = $personaje;
    }

    abstract public function getDescripcion(): string;
    abstract public function getPoder(): int;
}
?>
