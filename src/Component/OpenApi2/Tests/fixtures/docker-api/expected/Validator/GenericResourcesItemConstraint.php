<?php

namespace Docker\Api\Validator;

class GenericResourcesItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['NamedResourceSpec' => new \Symfony\Component\Validator\Constraints\Optional([]), 'DiscreteResourceSpec' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}