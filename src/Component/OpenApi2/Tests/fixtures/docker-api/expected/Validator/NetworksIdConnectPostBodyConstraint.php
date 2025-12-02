<?php

namespace Docker\Api\Validator;

class NetworksIdConnectPostBodyConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Container' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'EndpointConfig' => new \Symfony\Component\Validator\Constraints\Optional([new \Docker\Api\Validator\EndpointSettingsConstraint()])], allowExtraFields: true)];
    }
}