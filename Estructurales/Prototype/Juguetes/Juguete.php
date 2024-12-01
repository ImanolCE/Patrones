<?php

class Juguete {
    private $tipo;
    private $color;
    private $tamaño;

    public function __construct($tipo, $color, $tamaño) {
        $this->tipo = $tipo;
        $this->color = $color;
        $this->tamaño = $tamaño;
    }

    public function getDetalles() {
        return "Juguete tipo: {$this->tipo}, Color: {$this->color}, Tamaño: {$this->tamaño}";
    }
}
?>
