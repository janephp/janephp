<?php

namespace Docker\Api\Validator;

class ServiceSpecModeConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Replicated' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Global' => new \Symfony\Component\Validator\Constraints\Optional([]), 'ReplicatedJob' => new \Symfony\Component\Validator\Constraints\Optional([]), 'GlobalJob' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}