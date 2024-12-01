<?php 
require_once 'BebidaCaliente.php';

class Tea extends BebidaCaliente {
    protected function brew() {
        echo "Remojando el té<br>";
    }

    protected function addCondiments() {
        echo "Agregando Miel<br>";
    }
}

?>