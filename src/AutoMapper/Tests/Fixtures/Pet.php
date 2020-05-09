<?php

namespace Jane\AutoMapper\Tests\Fixtures;

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 * @DiscriminatorMap(typeProperty="type", mapping={
 *    "cat"="Jane\AutoMapper\Tests\Fixtures\Cat",
 *    "dog"="Jane\AutoMapper\Tests\Fixtures\Dog"
 * })
 */
class Pet
{
    /** @var string */
    public $type;
}
