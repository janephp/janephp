<?php

namespace Jane\Component\JsonSchema\Tests\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\Guess\EnumGuess;
use Jane\Component\JsonSchema\Guesser\JsonSchema\EnumGuesser;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class EnumGuesserTest extends TestCase
{
    public function testValuesWithConstKeyword(): void
    {
        // JSON Schema 2020-12: "const" is functionally equivalent to an "enum" with a single value.
        self::assertSame(['DPoP'], $this->guessValues('string', null, 'DPoP'));
        self::assertSame([400], $this->guessValues('integer', null, 400));
    }

    public function testConstKeywordTakesBackSeatToEnumKeyword(): void
    {
        self::assertSame(['Low', 'High'], $this->guessValues('string', ['Low', 'High'], 'Low'));
    }

    public function testSupportObjectIsFalseWithoutEnumNorConst(): void
    {
        $object = new JsonSchema();
        $object->type = 'string';

        self::assertFalse((new EnumGuesser())->supportObject($object));
    }

    /**
     * @param array<string|int>|null $enum  the "enum" keyword of the schema, when present
     * @param string|int|null        $const the "const" keyword of the schema, when present
     *
     * @return list<string|int>|null
     */
    private function guessValues(string $type, ?array $enum, mixed $const): ?array
    {
        $object = new JsonSchema();
        $object->type = $type;

        if (null !== $enum) {
            $object->enum = $enum;
        }

        if (null !== $const) {
            $object->const = $const;
        }

        $reference = 'schema.json#/definitions/Example';
        $registry = new Registry();
        $registry->addSchema(new Schema('schema.json', 'Vendor\Api', '/tmp/generated', 'Example'));

        (new EnumGuesser())->guessClass($object, 'Example', $reference, $registry);

        $class = $registry->getClass($reference);

        if (null === $enum && null === $const) {
            self::assertNull($class);

            return null;
        }

        self::assertInstanceOf(EnumGuess::class, $class);

        return $class->getValues();
    }

    /**
     * @param array<string|int> $values
     * @param list<string|null> $expected
     */
    #[DataProvider('varNamesProvider')]
    public function testVarNamesAreReadByPosition(array $values, mixed $varNames, array $expected): void
    {
        self::assertSame($expected, $this->guessVarNames($values, $varNames));
    }

    public static function varNamesProvider(): iterable
    {
        yield 'one name per value' => [[1, 2], ['Low', 'High'], ['Low', 'High']];
        yield 'names are trimmed' => [[1, 2], [' Low', "High\n"], ['Low', 'High']];
        yield 'fewer names than values' => [[1, 2], ['Low'], ['Low']];
        yield 'more names than values' => [[1, 2], ['Low', 'High', 'Medium'], ['Low', 'High', 'Medium']];
        yield 'a non-string entry' => [[1, 2], ['Low', 2], ['Low', null]];
        yield 'an empty entry' => [[1, 2], [' ', 'High'], [null, 'High']];
        yield 'not a list' => [[1, 2], ['first' => 'Low', 'second' => 'High'], []];
        yield 'not an array' => [[1, 2], 'Low', []];
    }

    public function testVarNamesAreEmptyWithoutTheExtension(): void
    {
        self::assertSame([], $this->guessVarNames(['regular', 'x_small']));
    }

    /**
     * @param array<string|int> $values
     *
     * @return list<string|null>
     */
    private function guessVarNames(array $values, mixed $varNames = null): array
    {
        $object = new JsonSchema();
        $object->type = \is_int($values[0]) ? 'integer' : 'string';
        $object->enum = $values;

        if (null !== $varNames) {
            $object[EnumGuesser::VAR_NAMES_EXTENSION] = $varNames;
        }

        $reference = 'schema.json#/definitions/Example';
        $registry = new Registry();
        $registry->addSchema(new Schema('schema.json', 'Vendor\Api', '/tmp/generated', 'Example'));

        (new EnumGuesser())->guessClass($object, 'Example', $reference, $registry);

        $class = $registry->getClass($reference);
        self::assertInstanceOf(EnumGuess::class, $class);

        return $class->getVarNames();
    }
}
