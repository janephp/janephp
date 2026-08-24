<?php

namespace Github\Validator;

class TrafficConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(min: 0, minMessage: 'This array has not enough properties. It should have {{ limit }} properties or more.'), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['timestamp' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\DateTime(format: 'Y-m-d\TH:i:sP'), new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'uniques' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['integer']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'count' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['integer']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}