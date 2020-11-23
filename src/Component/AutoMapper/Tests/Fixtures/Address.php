<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

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
