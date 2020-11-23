<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

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
