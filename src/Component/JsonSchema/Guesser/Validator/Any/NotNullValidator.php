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
        if (\get_class($object) === JsonSchema::class) {
            return \is_array($object->getType()) ? !\in_array('null', $object->getType()) : 'null' !== $object->getType();
        }
        if (\get_class($object) === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema') {
            return $object->offsetExists('x-nullable') && \is_bool($object->offsetGet('x-nullable')) && $object->offsetGet('x-nullable');
        }
        if (\get_class($object) === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema') {
            return method_exists($object, 'getNullable') && !($object->getNullable() ?? false);
        }

        return false;
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
