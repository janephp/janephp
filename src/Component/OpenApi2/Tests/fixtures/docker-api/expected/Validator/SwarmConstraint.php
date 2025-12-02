<?php

namespace Docker\Api\Validator;

class SwarmConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['ID' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Version' => new \Symfony\Component\Validator\Constraints\Optional([]), 'CreatedAt' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'UpdatedAt' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Spec' => new \Symfony\Component\Validator\Constraints\Optional([]), 'TLSInfo' => new \Symfony\Component\Validator\Constraints\Optional([]), 'RootRotationInProgress' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['bool'])]), 'DataPathPort' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])]), 'DefaultAddrPool' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['array'])]), 'SubnetSize' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\LessThanOrEqual(value: 29.0), new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])]), 'JoinTokens' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}