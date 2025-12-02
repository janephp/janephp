<?php

namespace Docker\Api\Validator;

class ResourcesBlkioWeightDeviceItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Path' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Weight' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\GreaterThanOrEqual(value: 0.0), new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])])], allowExtraFields: true)];
    }
}