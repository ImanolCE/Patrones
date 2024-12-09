<?php

/* declare(strict_types=1);

namespace Codenip\Creational\Builder\Model; */

readonly class Pizza {
    public function __construct(
        private string $size, // tamaño
        private string $dough, // tipo de masa 
        private string $cheese, // tipo queso 
        /** @var array<Topping> */
        private array $toppings, // ingredientes
    ) {}

    public function getSize(): string {
        return $this->size;
    }

    public function getDough(): string {
        return $this->dough;
    }

    public function getCheese(): string {
        return $this->cheese;
    }

    /**
     * @return array<Topping>
     */
    public function getToppings(): array
    {
        return $this->toppings;
    }
}