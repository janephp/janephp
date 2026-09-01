<?php

namespace Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model;

class Dog extends Pet
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