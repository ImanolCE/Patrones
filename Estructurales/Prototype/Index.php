<?php
require_once 'Juguetes/Juguete.php';

// Crear objetos originales
$jugueteBalon = new Juguete("Balon", "Rojo", "Grande");
$juguetePelota = new Juguete("Pelota", "Azul", "Pequeño");

// Clonar objetos
$jugueteBalonClonado = clone $jugueteBalon;
$juguetePelotaClonado = clone $juguetePelota;

// Mostrar resultados
echo "<h2>Juguetes originales:</h2>";
echo $jugueteBalon->getDetalles() . "<br>";
echo $juguetePelota->getDetalles() . "<br>";

echo "<h2>Juguetes clonados:</h2>";
echo $jugueteBalonClonado->getDetalles() . "<br>";
echo $juguetePelotaClonado->getDetalles() . "<br>";
?>
