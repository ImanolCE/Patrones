<?php
require_once 'Personaje/PersonajeBase.php';
require_once 'Personaje/Espada.php';
require_once 'Personaje/Escudo.php';
require_once 'Personaje/Armadura.php';

// Crear personaje base
$personaje = new PersonajeBase();
echo $personaje->getDescripcion() . " - Poder: " . $personaje->getPoder() . "<br>";

// se añad una espada
$personajeConEspada = new Espada($personaje);
echo $personajeConEspada->getDescripcion() . " - Poder: " . $personajeConEspada->getPoder() . "<br>";

// se añad una escudo
$personajeConEspadaEscudo = new Escudo($personajeConEspada);
echo $personajeConEspadaEscudo->getDescripcion() . " - Poder: " . $personajeConEspadaEscudo->getPoder() . "<br>";

// se añad unaarmadura
$personajeCompleto = new Armadura($personajeConEspadaEscudo);
echo $personajeCompleto->getDescripcion() . " - Poder: " . $personajeCompleto->getPoder() . "<br>";
?>
