<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Validator;

class ReportPeriodConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['from' => new \Symfony\Component\Validator\Constraints\Optional([])], allowExtraFields: true)];
    }
}