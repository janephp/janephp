<?php

namespace Jane\AutoMapper\Tests\Fixtures;

class UserDTOMerged
{
    /**
     * @var mixed[]
     */
    protected $properties = [];

    public function getProperties(): iterable
    {
        return $this->properties;
    }

    public function setProperties(iterable $properties): void
    {
        $this->properties = $properties;
    }
}
