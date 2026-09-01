<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Discriminator\Model;

class Dog extends Pet
{
    /**
     * the size of the pack the dog is from
     *
     * @var int
     */
    public int $packSize = 0;
}