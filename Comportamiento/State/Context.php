<?php
class Context {
    private $state;

    public function __construct($state) {
        $this->setState($state);
    }

    public function setState(State $state) {
        $this->state = $state;
        echo "El estado actual es: " . $this->state->getDescription() . "<br>";
    }

    public function nextState() {
        $this->state->evolve($this);
    }
}

?>