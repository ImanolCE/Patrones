<?php
interface ComputerBuilder {
    public function setCPU();
    public function setRAM();
    public function setStorage();
    public function setGPU();
    public function getComputer();
}

?>