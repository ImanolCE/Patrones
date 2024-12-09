<?php

require_once 'Trip.php';

class BasicTrip implements Trip
{
    public function cost(): int
    {
        return 100;
    }

    public function description(): string
    {
        return 'Basic trip';
    }
}