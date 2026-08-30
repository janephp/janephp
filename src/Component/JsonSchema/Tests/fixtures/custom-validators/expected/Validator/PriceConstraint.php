<?php

namespace Jane\JsonSchema\Tests\Expected\CustomValidators\Validator;

class PriceConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['amount' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Regex(pattern: '#^\d+\.\d{2}$#', message: 'This value is not a valid decimal with two fraction digits.'), new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'comment' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}