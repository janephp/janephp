<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue968\Validator;

class ReportPeriodConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['from' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string', 'null'])])], allowExtraFields: true)];
    }
}