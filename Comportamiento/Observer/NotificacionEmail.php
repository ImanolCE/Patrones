<?php 

class NotificacionEmail implements Observer {
    public function update($message) {
        echo "Enviando correo electrónico con el mensaje: $message<br>";
    }
}



?>