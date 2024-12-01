<?php
require_once 'ImpuestoContext.php';
require_once 'ImpuestoStrategy.php';
require_once 'UsaImpuesto.php';
require_once 'EuropaImpuesto.php';
require_once 'LatImpuesto.php';

// Monto base
$amount = 1000;


$ImpuestoContext = new ImpuestoContext();

// Impuestos en USA
$ImpuestoContext->setStrategy(new USAImpuesto());
echo "Impuesto en USA: " . $ImpuestoContext->calculate($amount) . "<br>";

// Impuestos en Europa
$ImpuestoContext->setStrategy(new EuropaImpuesto());
echo "Impuesto en Europa: " . $ImpuestoContext->calculate($amount) . "<br>";

// Impuestos en Latam
$ImpuestoContext->setStrategy(new LATImpuesto());
echo "Impuesto en Latinoamérica: " . $ImpuestoContext->calculate($amount) . "<br>";

?>