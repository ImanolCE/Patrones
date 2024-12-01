<?php
require_once 'BebidaCaliente.php';

class Coffee extends BebidaCaliente {
    protected function brew() {
        echo "Colando el café<br>";
    }

    protected function addCondiments() {
        echo "Agregando azúcar y leche<br>";
    }
}

?>