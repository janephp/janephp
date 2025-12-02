<?php

namespace Docker\Api\Validator;

class SwarmSpecCAConfigConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['NodeCertExpiry' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])]), 'ExternalCAs' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['array'])]), 'SigningCACert' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'SigningCAKey' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'ForceRotate' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])])], allowExtraFields: true)];
    }
}