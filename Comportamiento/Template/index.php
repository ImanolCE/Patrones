<?php
require_once 'Tea.php';
require_once 'Coffe.php';

// Preparar té
echo "Preparando Té:<br>";
$tea = new Tea();
$tea->prepareBeverage();
echo "<br>";

// Preparar café
echo "Preparando Café:<br>";
$coffee = new Coffee();
$coffee->prepareBeverage();

?>