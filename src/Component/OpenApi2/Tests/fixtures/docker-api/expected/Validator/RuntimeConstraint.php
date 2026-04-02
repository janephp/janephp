<?php

namespace Docker\Api\Validator;

class RuntimeConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['path' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'runtimeArgs' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\All(constraints: [new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), new \Symfony\Component\Validator\Constraints\Type(type: ['array']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}