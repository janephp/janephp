<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator;

class PaginatedResourceConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['meta' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Validator\PaginatedResourceMetaConstraint()])], allowExtraFields: true)];
    }
}