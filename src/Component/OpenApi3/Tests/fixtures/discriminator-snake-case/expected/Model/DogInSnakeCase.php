<?php

namespace Jane\Component\OpenApi3\Tests\Expected\DiscriminatorSnakeCase\Model;

class DogInSnakeCase extends Pet
{
    /**
     * the size of the pack the dog is from
     *
     * @var int
     */
    public int $packSize = 0;
    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['packSize' => 'packSize']);
    }
}