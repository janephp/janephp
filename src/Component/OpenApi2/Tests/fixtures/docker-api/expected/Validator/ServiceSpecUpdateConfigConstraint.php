<?php

namespace Docker\Api\Validator;

class ServiceSpecUpdateConfigConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Parallelism' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])]), 'Delay' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])]), 'FailureAction' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\Choice(choices: ['continue', 'pause', 'rollback'], message: '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')]), 'Monitor' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])]), 'MaxFailureRatio' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['float'])]), 'Order' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\Choice(choices: ['stop-first', 'start-first'], message: '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')])], allowExtraFields: true)];
    }
}