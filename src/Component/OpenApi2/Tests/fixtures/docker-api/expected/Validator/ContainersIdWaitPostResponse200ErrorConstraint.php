<?php

namespace Docker\Api\Validator;

class ContainersIdWaitPostResponse200ErrorConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Message' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])])], allowExtraFields: true)];
    }
}