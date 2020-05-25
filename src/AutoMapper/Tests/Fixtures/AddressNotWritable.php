<?php

namespace Jane\AutoMapper\Tests\Fixtures;

class AddressNotWritable
{
    /**
     * @var string|null
     */
    private $city;

    public function getCity(): ?string
    {
        return $this->city;
    }
}
