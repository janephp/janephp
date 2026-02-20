<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Validator;

class PlanetPhysicalPropertiesConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['mass' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\GreaterThan(value: 0.0), new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'radius' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\GreaterThan(value: 0.0), new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'gravity' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'temperature' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}