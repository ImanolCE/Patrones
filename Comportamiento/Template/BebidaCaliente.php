<?php 
abstract class BebidaCaliente {
    // Método plantilla que define los pasos
    public function prepareBeverage() {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    // Pasos comunes
    protected function boilWater() {
        echo "Hirviendo agua<br>";
    }

    protected function pourInCup() {
        echo "Sirviendo en la taza<br>";
    }

    // Pasos específicos que las subclases implementarán
    abstract protected function brew();
    abstract protected function addCondiments();
}

?>