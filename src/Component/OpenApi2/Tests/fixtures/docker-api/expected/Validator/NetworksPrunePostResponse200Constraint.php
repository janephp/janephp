<?php

namespace Docker\Api\Validator;

class NetworksPrunePostResponse200Constraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['NetworksDeleted' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\All(constraints: [new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), new \Symfony\Component\Validator\Constraints\Type(type: ['array'])])], allowExtraFields: true)];
    }
}