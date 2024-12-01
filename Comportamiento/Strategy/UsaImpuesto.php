<?php

class USAImpuesto implements ImpuestoStrategy {
    public function calculateTax($amount) {
        return $amount * 0.10; // 10% de impuesto
    }
}


?>