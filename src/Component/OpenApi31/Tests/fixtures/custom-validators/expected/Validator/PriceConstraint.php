<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Validator;

class PriceConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['amount' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Regex(pattern: '#^\d+\.\d{2}$#', message: 'This value is not a valid decimal with two fraction digits.'), new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'currency' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Choice(choices: ['EUR', 'USD', 'GBP'], message: 'This value is not a supported currency code.'), new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'discount' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\GreaterThanOrEqual(value: 0.0), new \Symfony\Component\Validator\Constraints\LessThanOrEqual(value: 100.0), new \Symfony\Component\Validator\Constraints\Type(type: ['float']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')]), 'comment' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.')])], allowExtraFields: true)];
    }
}