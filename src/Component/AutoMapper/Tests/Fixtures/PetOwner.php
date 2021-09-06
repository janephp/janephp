<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class PetOwner
{
    /** @var array<int, Pet> */
    private $pets;

    public function __construct()
    {
        $this->pets = [];
    }

    /**
     * @return Pet[]
     */
    public function getPets(): array
    {
        return $this->pets;
    }

    public function addPet(Pet $pet): void
    {
        $this->pets[] = $pet;
    }

    public function removePet(Pet $pet): void
    {
        $index = array_search($pet, $this->pets);

        if ($index !== false) {
            unset($this->pets[$index]);
        }
    }
}
