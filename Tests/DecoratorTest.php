<?php

require_once '../Ejemplos/Decorator/BasicTrip.php';
require_once '../Ejemplos/Decorator/HotelPackage.php';
require_once '../Ejemplos/Decorator/CarRental.php';
require_once '../Ejemplos/Decorator/Trip.php';
require_once '../Ejemplos/Decorator/TripDecorator.php';

class DecoratorTest 
{
    public function testDecorator(): void
    {
        $trip = new BasicTrip();

        self::assertEquals(100, $trip->cost());
        self::assertEquals('Basic trip', $trip->description());

        $tripWithHotel = new HotelPackage($trip);

        self::assertEquals(300, $tripWithHotel->cost());
        self::assertEquals('Basic trip + Hotel', $tripWithHotel->description());

        $tripWithCarRental = new CarRental($trip);

        self::assertEquals(250, $tripWithCarRental->cost());
        self::assertEquals('Basic trip + Car rental', $tripWithCarRental->description());

        $tripWithHotelAndCarRental = new CarRental($tripWithHotel);

        self::assertEquals(450, $tripWithHotelAndCarRental->cost());
        self::assertEquals('Basic trip + Hotel + Car rental', $tripWithHotelAndCarRental->description());
    }
}