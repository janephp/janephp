<?php

namespace Docker\Api\Validator;

class SwarmSpecCAConfigExternalCAsItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Protocol' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\Choice(choices: ['cfssl'], message: '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')]), 'URL' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Options' => new \Symfony\Component\Validator\Constraints\Optional([]), 'CACert' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])])], allowExtraFields: true)];
    }
}