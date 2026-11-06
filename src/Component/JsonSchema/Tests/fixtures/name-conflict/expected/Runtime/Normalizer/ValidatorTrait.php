<?php

namespace Jane\Component\JsonSchema\Tests\Expected\NameConflict\Runtime\Normalizer;

use Symfony\Component\Validator\Constraint;
trait ValidatorTrait
{
    protected function validate(array $data, Constraint $constraint): void
    {
        $violations = ValidatorRegistry::get()->validate($data, $constraint);
        if ($violations->count() > 0) {
            throw new ValidationException($violations);
        }
    }
}