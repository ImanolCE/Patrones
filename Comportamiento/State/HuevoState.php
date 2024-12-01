<?php 
class HuevoState implements State {
    public function evolve($context) {
        $context->setState(new OrugaState());
    }

    public function getDescription() {
        return "Huevo: el comienzo del ciclo de vida.";
    }
}

?>