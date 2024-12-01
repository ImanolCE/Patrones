<?php

class AdaptadorMedicion {
    private SistemaMillas $sistemaMillas;

    public function __construct(SistemaMillas $sistemaMillas) {
        $this->sistemaMillas = $sistemaMillas;
    }

    public function convertirKmAMillas(float $kilometros): string {
        $millas = $kilometros * 0.621371; // Conversión de km a millas
        return $this->sistemaMillas->getDistanciaEnMillas($millas);
    }
}
