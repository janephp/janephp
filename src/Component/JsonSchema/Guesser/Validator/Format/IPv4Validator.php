<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Format;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\Ip;

class IPv4Validator implements ValidatorInterface
{
    use ObjectCheckTrait;

    public function supports($object): bool
    {
        return $this->checkObject($object) && ((\is_array($object->type ?? null) ? \in_array('string', $object->type ?? null) : 'string' === ($object->type ?? null)) || null === ($object->type ?? null)) && 'ipv4' === ($object->format ?? null);
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(Ip::class, [
            'version' => Ip::V4,
        ]));
    }
}
