<?php

namespace Docker\Api\Validator;

class NetworkingConfigConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['EndpointsConfig' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}