<?php

namespace Jane\Component\OpenApi2\Tests\EnumAsObjects\Validator;

class ItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['status' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['string']), new \Symfony\Component\Validator\Constraints\Choice(choices: ['available', 'out-of-stock', 'reserved', 'new-york', 'NewYork'], message: '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')]), 'priority' => new \Symfony\Component\Validator\Constraints\Required([new \Symfony\Component\Validator\Constraints\Type(type: ['integer'])])], allowExtraFields: true)];
    }
}