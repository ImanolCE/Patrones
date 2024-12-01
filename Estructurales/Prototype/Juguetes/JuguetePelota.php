<?php

require_once 'Juguete.php';

class JuguetePelota extends Juguete {
    public function __construct($color, $tamanio) {
        parent::__construct('Pelota', $color, $tamanio);
    }
}
