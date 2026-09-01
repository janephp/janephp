<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Object_;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\Count;

class MinPropertiesValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    public function supports($object): bool
    {
        return $this->checkObject($object) && ((\is_array($object->type ?? null) ? \in_array('object', $object->type ?? null) : 'object' === ($object->type ?? null)) || (null === ($object->type ?? null) && \is_array($object->properties ?? null) && \count($object->properties ?? null) > 0)) && \is_int($object->minProperties ?? null);
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(Count::class, [
            'min' => ($object->minProperties ?? null),
            'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.',
        ]));
    }
}
