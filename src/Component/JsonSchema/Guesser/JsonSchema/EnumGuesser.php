<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Generator\Options;
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
    public const VAR_NAMES_EXTENSION = 'x-enum-varnames';

    public function __construct(
        protected readonly Naming $naming = new Naming(),
        protected readonly string $unknownValue = Options::ENUMS_UNKNOWN_VALUE_THROW,
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

        if (null !== ($object->enum ?? null) && \count($object->enum ?? null) > 0) {
            return true;
        }

        // JSON Schema 2020-12: "const" is functionally equivalent to an "enum" with a single value.
        return null !== ($object->const ?? null);
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
            $this->getEnumValues($object),
            property_exists($object, 'deprecated') && (($object->deprecated ?? null) ?? false),
            $this->getVarNames($object)
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
                $classGuess->getSubNamespace(),
                $this->unknownValue
            );
        }

        return new Type($object, $backingType);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }

    /**
     * Read the "x-enum-varnames" vendor extension: the case name of each enum value, by position.
     *
     * @return list<string|null> the trimmed names, null for an entry that is not a non-empty string; empty when the extension is absent or not a list
     */
    private function getVarNames(object $object): array
    {
        if (!$object instanceof \ArrayAccess || !isset($object[self::VAR_NAMES_EXTENSION])) {
            return [];
        }

        $varNames = $object[self::VAR_NAMES_EXTENSION];

        if (!\is_array($varNames) || !array_is_list($varNames)) {
            return [];
        }

        return array_map(
            static fn ($varName): ?string => \is_string($varName) && '' !== trim($varName) ? trim($varName) : null,
            $varNames
        );
    }

    /**
     * The enum values: the "enum" keyword list, or a single-value list built from "const"
     * (JSON Schema 2020-12: "const" is functionally equivalent to an "enum" with a single value).
     *
     * @param JsonSchema $object
     *
     * @return array<string|int>|null
     */
    private function getEnumValues($object): ?array
    {
        if (null !== ($object->enum ?? null)) {
            return $object->enum;
        }

        return [$object->const];
    }

    private function getBackingType(string $type): string
    {
        return 'integer' === $type ? 'int' : 'string';
    }
}
