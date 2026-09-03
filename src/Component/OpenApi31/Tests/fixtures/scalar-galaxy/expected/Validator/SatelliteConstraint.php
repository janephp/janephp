<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator;

class SatelliteConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['id' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['integer']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'name' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'description' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string', 'null'])]), 'diameter' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'type' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\Choice(choices: ['moon', 'asteroid', 'comet'], message: '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'orbit' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator\SatelliteOrbitConstraint()])], allowExtraFields: true)];
    }
}