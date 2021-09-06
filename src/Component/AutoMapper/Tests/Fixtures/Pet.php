<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 * @DiscriminatorMap(typeProperty="type", mapping={
 *    "cat"="Jane\Component\AutoMapper\Tests\Fixtures\Cat",
 *    "dog"="Jane\Component\AutoMapper\Tests\Fixtures\Dog"
 * })
 */
class Pet
{
    /** @var string */
    public $type;

    /** @var string */
    public $name;

    /** @var PetOwner */
    public $owner;
}
