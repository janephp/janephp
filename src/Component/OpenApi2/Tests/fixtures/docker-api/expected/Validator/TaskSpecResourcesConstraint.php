<?php

namespace Docker\Api\Validator;

class TaskSpecResourcesConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Limits' => new \Symfony\Component\Validator\Constraints\Optional([]), 'Reservation' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}