<?php 
class EuropaImpuesto implements ImpuestoStrategy {
    public function calculateTax($amount) {
        return $amount * 0.20; // 20% de impuesto
    }
}

?>