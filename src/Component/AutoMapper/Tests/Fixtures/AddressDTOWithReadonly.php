<?php

declare(strict_types=1);

namespace Jane\Component\AutoMapper\Tests\Fixtures;

final class AddressDTOWithReadonly
{
    private readonly string $city;

    public function __construct(string $city)
    {
        $this->city = $city;
    }

    public function getCity(): string
    {
        return $this->city;
    }
}
