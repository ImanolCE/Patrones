<?php
class MariposaState implements State {
    public function evolve($context) {
        echo "¡La mariposa está completamente formada y no puede evolucionar más o si!<br>";
    }

    public function getDescription() {
        return "Mariposa: sana y lista para volar.";
    }
}

?>