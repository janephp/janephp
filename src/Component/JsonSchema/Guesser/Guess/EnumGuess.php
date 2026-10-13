<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

class EnumGuess extends ClassGuess implements NonObjectGuessInterface
{
    /**
     * @param object            $object      Object linked to the generation
     * @param string            $reference   Reference of the schema
     * @param string            $name        Name of the enum
     * @param string            $backingType Backing type of the generated enum ('string' or 'int')
     * @param array<string|int> $values      Values of the enum
     * @param list<string|null> $varNames    Case names from the "x-enum-varnames" extension, by value position; null for an unusable entry, empty when the extension is absent
     */
    public function __construct(
        object $object,
        string $reference,
        string $name,
        private readonly string $backingType,
        private readonly array $values,
        bool $deprecated = false,
        private readonly array $varNames = [],
    ) {
        parent::__construct($object, $reference, $name, [], $deprecated);
    }

    public function getBackingType(): string
    {
        return $this->backingType;
    }

    /**
     * @return array<string|int>
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * Get the case names read from "x-enum-varnames", by value position.
     *
     * @return list<string|null>
     */
    public function getVarNames(): array
    {
        return $this->varNames;
    }
}
