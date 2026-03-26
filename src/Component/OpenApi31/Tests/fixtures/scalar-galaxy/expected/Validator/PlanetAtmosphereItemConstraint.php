<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Validator;

class PlanetAtmosphereItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['compound' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'percentage' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\LessThan(value: 100.0), new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}