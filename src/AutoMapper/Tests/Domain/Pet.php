<?php

namespace Jane\AutoMapper\Tests\Domain;

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 * @DiscriminatorMap(typeProperty="type", mapping={
 *    "cat"="Jane\AutoMapper\Tests\Domain\Cat",
 *    "dog"="Jane\AutoMapper\Tests\Domain\Dog"
 * })
 */
class Pet
{
    /** @var string */
    public $type;
}
