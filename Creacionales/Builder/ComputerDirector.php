<?php 
class ComputerDirector {
    private $builder;

    public function __construct(ComputerBuilder $builder) {
        $this->builder = $builder;
    }

    public function buildComputer() {
        $this->builder->setCPU();
        $this->builder->setRAM();
        $this->builder->setStorage();
        $this->builder->setGPU();
    }

    public function getComputer() {
        return $this->builder->getComputer();
    }
}

?>