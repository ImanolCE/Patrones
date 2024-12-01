<?php
class ImpuestoContext {
    private $strategy;

    public function setStrategy(ImpuestoStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function calculate($amount) {
        if (!$this->strategy) {
            throw new Exception("No se ha seleccionado una estrategia de impuestos.");
        }
        return $this->strategy->calculateTax($amount);
    }
}

?>