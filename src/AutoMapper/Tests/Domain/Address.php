<?php

namespace Jane\AutoMapper\Tests\Domain;

class Address
{
    /**
     * @var string|null
     */
    private $city;

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }
}
