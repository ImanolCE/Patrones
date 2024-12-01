<?php

require_once 'Subject.php';
require_once 'Observer.php';
require_once 'NotificacionEmail.php';
require_once 'NotificacionSMS.php';

// Crear el subject (sujeto)
$subject = new Subject();

// Crear observadores
$emailObserver = new NotificacionEmail();
$smsObserver = new NotificacionSMS();

// Agregar observadores al sujeto
$subject->addObserver($emailObserver);
$subject->addObserver($smsObserver);

// Cambiar el estado y notificar a los observadores
$subject->notifyObservers("¡Nueva notificación! Un accidente ha ocurrido.");


?>