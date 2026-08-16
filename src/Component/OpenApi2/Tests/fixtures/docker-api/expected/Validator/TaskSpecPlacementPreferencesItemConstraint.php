<?php

namespace Docker\Api\Validator;

class TaskSpecPlacementPreferencesItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Spread' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}