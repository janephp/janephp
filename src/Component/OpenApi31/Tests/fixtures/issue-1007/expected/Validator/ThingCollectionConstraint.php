<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Validator;

class ThingCollectionConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Symfony\Component\Validator\Constraints\Collection(fields: ['absent' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Jane\Component\OpenApi31\Tests\Expected\Validator\AbsentAdditionalPropertiesSchemaConstraint()]), 'explicitOpen' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Jane\Component\OpenApi31\Tests\Expected\Validator\ExplicitOpenSchemaConstraint()]), 'closed' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Jane\Component\OpenApi31\Tests\Expected\Validator\ClosedSchemaConstraint()]), 'typedMap' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Jane\Component\OpenApi31\Tests\Expected\Validator\TypedMapSchemaConstraint()]), 'patternOnly' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\NotNull(message: 'This value should not be null.'), new \Jane\Component\OpenApi31\Tests\Expected\Validator\PatternOnlySchemaConstraint()])], allowExtraFields: true)];
    }
}