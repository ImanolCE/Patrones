<?php

require_once 'SistemaKilometros.php';
require_once 'SistemaMillas.php';
require_once 'AdaptadorMedicion.php';

// Sistema original en kilómetros
$sistemaKilometros = new SistemaKilometros();
echo $sistemaKilometros->getDistanciaEnKilometros(111) . "<br>";

// Adaptador para convertir a millas
$sistemaMillas = new SistemaMillas();
$adaptador = new AdaptadorMedicion($sistemaMillas);

echo $adaptador->convertirKmAMillas(10) . "<br>";
