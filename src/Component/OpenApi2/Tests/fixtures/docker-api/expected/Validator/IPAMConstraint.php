<?php

namespace Docker\Api\Validator;

class IPAMConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Driver' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Config' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['array'])]), 'Options' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}