<?php

namespace Docker\Api\Validator;

class PeerNodeConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['NodeID' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Addr' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])])], allowExtraFields: true)];
    }
}