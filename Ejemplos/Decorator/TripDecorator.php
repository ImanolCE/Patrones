<?php

require_once 'Trip.php';

abstract class TripDecorator implements Trip
{
    public function __construct(
        protected readonly Trip $trip,
    ) {}

    public function cost(): int
    {
        return $this->trip->cost();
    }

    public function description(): string
    {
        return $this->trip->description();
    }
}

