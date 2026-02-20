<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Validator;

class SatelliteOrbitConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['planet' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'orbitalPeriod' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'distance' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}