<?php

class Subject {
    private $observers = [];

    // Agregar un observador
    public function addObserver($observer) {
        $this->observers[] = $observer;
    }

    // Notificar a todos los observadores
    public function notifyObservers($message) {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }
}


?>