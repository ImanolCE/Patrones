<?php 

class OrugaState implements State {
    public function evolve($context) {
        $context->setState(new CrisalidaState());
    }

    public function getDescription() {
        return "Oruga: comiendo y creciendo.";
    }
}


?>