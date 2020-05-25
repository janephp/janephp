<?php

namespace Jane\AutoMapper\Tests\Fixtures;

class Address
{
    /**
     * @var string|null
     */
    private $city;

    /**
     * @param string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }
}
