<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue966\Validator;

class OrderConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['product_data' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Jane\Component\OpenApi31\Tests\Expected\Issue966\Validator\OrderProductDataConstraint()]), 'product' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Jane\Component\OpenApi31\Tests\Expected\Issue966\Validator\OrderProductConstraint()])], allowExtraFields: true)];
    }
}