<?php

namespace Docker\Api\Validator;

class PluginMountConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['Name' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Description' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Settable' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\All(constraints: [new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), new \Symfony\Component\Validator\Constraints\Type(type: ['array'])]), 'Source' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Destination' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Type' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Options' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\All(constraints: [new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), new \Symfony\Component\Validator\Constraints\Type(type: ['array'])])], allowExtraFields: true)];
    }
}