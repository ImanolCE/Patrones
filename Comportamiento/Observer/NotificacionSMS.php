<?php 

class NotificacionSMS implements Observer {
    public function update($message) {
        echo "Enviando SMS con el mensaje: $message<br>";
    }
}


?>