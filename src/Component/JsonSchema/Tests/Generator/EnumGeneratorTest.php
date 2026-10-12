<?php

namespace Jane\Component\JsonSchema\Tests\Generator;

use Jane\Component\JsonSchema\Generator\EnumGenerator;
use Jane\Component\JsonSchema\Guesser\Guess\EnumGuess;
use PhpParser\Node\Stmt;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class EnumGeneratorTest extends TestCase
{
    /**
     * @param array<string|int> $values
     * @param list<string|null> $varNames
     * @param list<string>      $expected
     */
    #[DataProvider('caseNamesProvider')]
    public function testCaseNames(string $backingType, array $values, array $varNames, array $expected): void
    {
        $enum = (new class() extends EnumGenerator {
            public function create(EnumGuess $enumGuess): Stmt\Enum_
            {
                return $this->createEnum($enumGuess);
            }
        })->create(new EnumGuess(new \stdClass(), '#/Example', 'Example', $backingType, $values, false, $varNames));

        $caseNames = array_map(
            static fn (Stmt\EnumCase $case): string => $case->name->toString(),
            array_values(array_filter($enum->stmts, static fn ($stmt): bool => $stmt instanceof Stmt\EnumCase))
        );

        self::assertSame($expected, $caseNames);
    }

    public static function caseNamesProvider(): iterable
    {
        yield 'without names, from the values' => ['string', ['regular', 'x_small'], [], ['Regular', 'XSmall']];
        yield 'integer values without names' => ['int', [1, 2], [], ['Value1', 'Value2']];
        yield 'names are kept as written' => ['int', [1, 2], ['Low', 'High'], ['Low', 'High']];
        yield 'non-ASCII names are kept as written' => ['string', ['a', 'b'], ['Größe', 'Groß'], ['Größe', 'Groß']];
        yield 'invalid names fall back to the values' => ['string', ['a', 'x_small'], ['2XL', 'Extra Small'], ['A', 'XSmall']];
        yield 'a trailing newline falls back to the value' => ['int', [1, 2], ["Low\n", 'High'], ['Value1', 'High']];
        yield 'class falls back to the value' => ['int', [1, 2], ['Class', 'class'], ['Value1', 'Value2']];
        yield 'a shorter list names the first values' => ['int', [1, 2], ['Low'], ['Low', 'Value2']];
        yield 'a longer list ignores the extra names' => ['int', [1], ['Low', 'High'], ['Low']];
        yield 'an invalid entry only affects its own value' => ['int', [1, 2, 3], ['Low', '2XL', 'High'], ['Low', 'Value2', 'High']];
        yield 'a missing entry only affects its own value' => ['int', [1, 2], [null, 'High'], ['Value1', 'High']];
        yield 'colliding names' => ['string', ['a', 'b'], ['Same', 'Same'], ['Same', 'Same2']];
    }
}
