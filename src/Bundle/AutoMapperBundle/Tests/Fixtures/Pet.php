<?php

namespace Jane\Bundle\AutoMapperBundle\Tests\Fixtures;

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 * @DiscriminatorMap(typeProperty="type", mapping={
 *    "cat"="Jane\Bundle\AutoMapperBundle\Tests\Fixtures\Cat",
 *    "dog"="Jane\Bundle\AutoMapperBundle\Tests\Fixtures\Dog"
 * })
 */
class Pet
{
    /** @var string */
    public $type;
}
