<?php

namespace Docker\Api\Validator;

class SwarmSpecTaskDefaultsConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['LogDriver' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}