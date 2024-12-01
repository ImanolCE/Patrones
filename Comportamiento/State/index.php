<?php 

require_once 'Context.php';
require_once 'State.php';
require_once 'HuevoState.php';
require_once 'OrugaState.php';
require_once 'CrisalidaState.php';
require_once 'MariposaState.php';

// Estado inicial: Huevo
$initialState = new HuevoState();
$context = new Context($initialState);

// Evolución del ciclo de vida
$context->nextState(); // Huevo -> Oruga
$context->nextState(); // Oruga -> Crisalida
$context->nextState(); // Crislida -> Mariposa
$context->nextState(); // Mariposa (hassta qui llega9


?>