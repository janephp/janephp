<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures\SkipNullValues;

class Entity
{
    /**
     * @var string
     */
    private $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
