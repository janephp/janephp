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
