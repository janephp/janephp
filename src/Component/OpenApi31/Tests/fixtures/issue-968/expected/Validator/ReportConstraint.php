<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue968\Validator;

class ReportConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['period' => new \Symfony\Component\Validator\Constraints\Optional([new \Jane\Component\OpenApi31\Tests\Expected\Issue968\Validator\ReportPeriodConstraint()])], allowExtraFields: true)];
    }
}