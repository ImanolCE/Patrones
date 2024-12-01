<?php
require_once 'GamingComputerBuilder.php';
require_once 'OfficeComputerBuilder.php';
require_once 'ComputerDirector.php';

// Construir una computadora gaming
$gamingBuilder = new GamingComputerBuilder();
$gamingDirector = new ComputerDirector($gamingBuilder);
$gamingDirector->buildComputer();
$gamingComputer = $gamingDirector->getComputer();

echo "Computadora Gaming:<br>";
$gamingComputer->showSpecifications();
echo "<br>";

// Construir una computadora de oficina
$officeBuilder = new OfficeComputerBuilder();
$officeDirector = new ComputerDirector($officeBuilder);
$officeDirector->buildComputer();
$officeComputer = $officeDirector->getComputer();

echo "Computadora de Oficina:<br>";
$officeComputer->showSpecifications();

?>