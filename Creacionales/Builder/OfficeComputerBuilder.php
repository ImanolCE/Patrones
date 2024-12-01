<?php
require_once 'ComputerBuilder.php';
require_once 'Computer.php';

class OfficeComputerBuilder implements ComputerBuilder {
    private $computer;

    public function __construct() {
        $this->computer = new Computer();
    }

    public function setCPU() {
        $this->computer->cpu = 'Intel Core i5';
    }

    public function setRAM() {
        $this->computer->ram = '8GB';
    }

    public function setStorage() {
        $this->computer->storage = '512GB SSD';
    }

    public function setGPU() {
        $this->computer->gpu = null; // No incluye GPU dedicada
    }

    public function getComputer() {
        return $this->computer;
    }
}

?>