<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Any;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\NotNull;

class NotNullValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    public function supports($object): bool
    {
        return $this->checkObject($object) && ((\is_array($object->getType()) ? !\in_array('null', $object->getType()) : 'null' !== $object->getType()) || (method_exists($object, 'getNullable') && !($object->getNullable() ?? false)));
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(NotNull::class, [
            'message' => 'This value should not be null.',
        ]));
    }
}
