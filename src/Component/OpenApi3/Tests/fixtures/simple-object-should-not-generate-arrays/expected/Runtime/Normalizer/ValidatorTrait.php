<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer;

use Symfony\Component\Validator\Constraint;
trait ValidatorTrait
{
    protected function validate(array $data, Constraint $constraint) : void
    {
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraint);
        if ($violations->count() > 0) {
            throw new ValidationException($violations);
        }
    }
}