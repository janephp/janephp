<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator;

class PlanetPhysicalPropertiesTemperatureConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['min' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'max' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'average' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}