<?php
class Leon {
    private static $instancia = null; // Única instancia de la clase.
    private $nombre;

    // Constructor privado para evitar instanciación directa.
    private function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public static function getInstancia($nombre = "El Rey Leon") {
        if (self::$instancia === null) {
            self::$instancia = new Leon($nombre);
        }
        return self::$instancia;
    }

     // Método para mostrar información
    public function mostrarLeon() {
        echo "Soy un " . $this->nombre . ".<br>";
    }
}
?>
