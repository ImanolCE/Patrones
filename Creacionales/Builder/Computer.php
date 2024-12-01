<?php 
class Computer {
    public $cpu;
    public $ram;
    public $storage;
    public $gpu;

    public function showSpecifications() {
        echo "Especificaciones de la computadora:<br>";
        echo "CPU: $this->cpu<br>";
        echo "RAM: $this->ram<br>";
        echo "Almacenamiento: $this->storage<br>";
        echo "GPU: " . ($this->gpu ?: 'No aplica') . "<br>";
    }
}

?>