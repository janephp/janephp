<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\String_;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class PatternValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    public function supports($object): bool
    {
        return $this->checkObject($object) && ((\is_array($object->type ?? null) ? \in_array('string', $object->type ?? null) : 'string' === ($object->type ?? null)) || null === ($object->type ?? null)) && null !== ($object->pattern ?? null);
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(Regex::class, [
            'pattern' => \sprintf('#%s#', $object->pattern ?? null),
            'message' => 'This value is not valid.',
        ]));

        // The Symfony Regex constraint considers empty strings valid, but JSON Schema requires
        // every string (including "") to match the pattern, so empty strings must be rejected.
        $options = [];
        if ($this->isNullable($object)) {
            // Using an integer as a replacement boolean value is most likely to break as soon as
            // \Symfony\Component\Validator\Constraints\NotBlank::$allowNull is strongly typed.
            // Currently we can not use 'bool' here, because \Jane\Component\JsonSchema\Generator\ValidatorGenerator::generateConstraint()
            // does not handle them. This seems to be an issue with nikic/php-parser not being able to provide support
            // for it.
            $options = ['allowNull' => 1];
        }
        $guess->addValidatorGuess(new ValidatorGuess(NotBlank::class, $options));
    }
}
