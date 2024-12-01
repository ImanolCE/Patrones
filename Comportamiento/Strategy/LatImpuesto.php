<?php 
class LATImpuesto implements ImpuestoStrategy {
    public function calculateTax($amount) {
        return $amount * 0.15; // 15% de impuesto
    }
}

?>