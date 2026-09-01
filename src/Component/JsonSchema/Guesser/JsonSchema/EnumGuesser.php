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
    public function __construct(
        protected readonly Naming $naming = new Naming(),
    ) {
    }

    public function supportObject($object): bool
    {
        $schemaClass = $this->getSchemaClass();

        if (!$object instanceof $schemaClass) {
            return false;
        }

        if (!\is_string($object->type ?? null) || !\in_array($object->type ?? null, ['string', 'integer'], true)) {
            return false;
        }

        return null !== ($object->enum ?? null) && \count($object->enum ?? null) > 0;
    }

    /**
     * @param JsonSchema $object
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (!$this->supportObject($object) || $registry->hasClass($reference)) {
            return;
        }

        $schema = $registry->getSchema($reference);

        if (null === $schema) {
            return;
        }

        $schema->addClass($reference, new EnumGuess(
            $object,
            $reference,
            $this->naming->getClassName($name),
            $this->getBackingType($object->type ?? null),
            $object->enum ?? null,
            property_exists($object, 'deprecated') && (($object->deprecated ?? null) ?? false)
        ));
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        if (!$this->supportObject($object)) {
            return new Type($object, 'mixed');
        }

        $backingType = $this->getBackingType($object->type ?? null);
        $schema = $registry->getSchema($reference);
        $classGuess = $registry->getClass($reference);

        if (null !== $schema && $classGuess instanceof EnumGuess) {
            return new EnumType(
                $object,
                $backingType,
                $classGuess->getName(),
                $schema->getNamespace(),
                $classGuess->getSubNamespace()
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
        return 'integer' === $type ? 'int' : 'string';
    }
}
