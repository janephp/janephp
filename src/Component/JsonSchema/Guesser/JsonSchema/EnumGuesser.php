<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Guess\EnumGuess;
use Jane\Component\JsonSchema\Guesser\Guess\EnumType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class EnumGuesser implements GuesserInterface, ClassGuesserInterface, TypeGuesserInterface
{
    public function __construct(private readonly Naming $naming = new Naming())
    {
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();
        if (!$object instanceof $class) {
            return false;
        }

        if (!\in_array($object->getType(), ['string', 'integer'], true)) {
            return false;
        }

        if (null === $object->getEnum() || [] === $object->getEnum()) {
            return false;
        }

        return true;
    }

    /**
     * @param JsonSchema $object
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if ($registry->hasClass($reference)) {
            return;
        }

        $values = $object->getEnum();

        $enumGuess = new EnumGuess(
            $object,
            $reference,
            $this->naming->getClassName($name),
            $this->getBackingType($object->getType()),
            $values,
            method_exists($object, 'getDeprecated') && ($object->getDeprecated() ?? false)
        );

        $schema = $registry->getSchema($reference);
        if (null !== $schema) {
            $schema->addClass($reference, $enumGuess);
        }
    }

    /**
     * @param JsonSchema $object
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $backingType = $this->getBackingType($object);

        if ($registry->hasClass($reference) && null !== ($schema = $registry->getSchema($reference))) {
            return new EnumType(
                $object,
                $registry->getClass($reference)->getName(),
                $schema->getNamespace(),
                $backingType,
            );
        }

        return new Type($object, $backingType);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }

    private function getBackingType(string $type): string
    {
        return match ($type) {
            'integer' => 'int',
            default => 'string',
        };
    }
}
