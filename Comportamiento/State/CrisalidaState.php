<?php
class CrisalidaState implements State {
    public function evolve($context) {
        $context->setState(new MariposaState());
    }

    public function getDescription() {
        return "Crisálida: en transformación.";
    }
}

?>