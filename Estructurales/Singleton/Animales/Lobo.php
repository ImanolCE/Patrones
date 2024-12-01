<?php
class Lobo {
    private static $instancia = null; // Variable estática para almacenar la única instancia.
    private $nombre; // Atributo para identificar al lobo.

    
    private function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método estático para obtener la única instancia del lobo.
    public static function getInstancia($nombre = "Lobo Solitario") {
        if (self::$instancia === null) {
            self::$instancia = new Lobo($nombre);
        }
        return self::$instancia;
    }

    // Método para mostrar información del lobo.
    public function mostrarLobo() {
        echo "Soy un " . $this->nombre . ".<br>";
    }
}
?>
