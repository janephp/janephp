<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Any;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\Type;

class TypeValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    /** @var array<string, string> */
    private const TYPES_MAPPING = [
        'boolean' => 'bool',
        'number' => 'float',
    ];

    public function supports($object): bool
    {
        return $this->checkObject($object) && $object->getType() !== null && (\is_string($object->getType()) || \is_array($object->getType() && null !== $object->getType()[0]));
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $types = $object->getType();
        if (\is_string($types)) {
            $types = [$types];
        }

        $types = array_flip($types);
        if (\array_key_exists('object', $types)) {
            return;
        }

        foreach (self::TYPES_MAPPING as $jsonSchemaType => $phpType) {
            if (\array_key_exists($jsonSchemaType, $types)) {
                unset($types[$jsonSchemaType]);
                $types[$phpType] = 1;
            }
        }

        $guess->addValidatorGuess(new ValidatorGuess(Type::class, array_keys($types)));
    }
}
