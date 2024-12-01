<?php
require_once 'Animales/Lobo.php';
require_once 'Animales/Leon.php';


$lobo = Lobo::getInstancia("Lobo Unico");
$lobo->mostrarLobo();

$leon = Leon::getInstancia("León Unico");
$leon->mostrarLeon();

// Aqui intentamos crear otro lobo y otro león
$otroLobo = Lobo::getInstancia("Otro Lobo");
$otroLeon = Leon::getInstancia("Otro León ");

// Mostramos las instancias
$otroLobo->mostrarLobo();
$otroLeon->mostrarLeon();

// Verificamos si las instancias son únicas
if ($lobo === $otroLobo) {
    echo "Solo hay un lobo.<br>";
} else {
    echo "Hay más de un lobo.<br>";
}

if ($leon === $otroLeon) {
    echo "Solo hay un león.<br>";
} else {
    echo "Hay más de un león.<br>";
}
?>
