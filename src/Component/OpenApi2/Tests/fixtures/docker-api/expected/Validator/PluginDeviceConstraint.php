<?php

namespace Docker\Api\Validator;

class PluginDeviceConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Name' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Description' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Settable' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\All(constraints: [new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), new \Symfony\Component\Validator\Constraints\Type(type: ['array'])]), 'Path' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])])], allowExtraFields: true)];
    }
}