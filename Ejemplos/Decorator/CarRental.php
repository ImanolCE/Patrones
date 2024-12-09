<?php

require_once 'TripDecorator.php';

class CarRental extends TripDecorator{
    private const int COST = 150;

    public function cost(): int
    {
        return $this->trip->cost() + self::COST;
    }

    public function description(): string
    {
        return sprintf('%s + Car rental', $this->trip->description());
    }
}