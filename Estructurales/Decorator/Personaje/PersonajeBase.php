<?php
class PersonajeBase {
    public function getDescripcion(): string {
        return "Personaje base";
    }

    public function getPoder(): int {
        return 10; // Poder inicial del personaje
    }
}
?>
