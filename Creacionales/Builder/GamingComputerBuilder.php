<?php
require_once 'ComputerBuilder.php';
require_once 'Computer.php';

class GamingComputerBuilder implements ComputerBuilder {
    private $computer;

    public function __construct() {
        $this->computer = new Computer();
    }

    public function setCPU() {
        $this->computer->cpu = 'Intel Core i9';
    }

    public function setRAM() {
        $this->computer->ram = '32GB';
    }

    public function setStorage() {
        $this->computer->storage = '2TB SSD';
    }

    public function setGPU() {
        $this->computer->gpu = 'NVIDIA RTX 4090';
    }

    public function getComputer() {
        return $this->computer;
    }
}

?>