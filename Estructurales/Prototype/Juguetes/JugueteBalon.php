<?php

require_once 'Juguete.php';

class JugueteBalon extends Juguete {
    public function __construct($color, $tamanio) {
        parent::__construct('Balon', $color, $tamanio);
    }
}
