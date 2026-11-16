<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Tests\Generator\Endpoint;

use Jane\Component\JsonSchema\Tools\InflectorTrait;
use Jane\Component\OpenApiCommon\Generator\Endpoint\PathParameterNameTrait;
use PhpParser\Node\ArrayItem;
use PhpParser\PrettyPrinter\Standard;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class PathParameterNameTraitTest extends TestCase
{
    public static function provideParameterNames(): iterable
    {
        // Regex-constrained path templates like /cluster/{id:.+} declare the
        // constraint as part of the parameter name; it must never leak into
        // the generated PHP variable name (issue #1051).
        yield 'regex constraint' => ['id:.+', 'id'];
        yield 'regex constraint camelCase' => ['firmwareVersion:.+', 'firmwareVersion'];
        yield 'plain' => ['id', 'id'];
        yield 'snake_case' => ['pet_id', 'petId'];
        yield 'dashed' => ['pet-id', 'petId'];
        yield 'camelCase' => ['petId', 'petId'];
    }

    #[DataProvider('provideParameterNames')]
    public function testNormalizePathVariableName(string $parameterName, string $expected): void
    {
        $subject = new class() {
            use InflectorTrait;
            use PathParameterNameTrait;

            public function variableName(string $parameterName): string
            {
                return $this->normalizePathVariableName($parameterName);
            }
        };

        self::assertSame($expected, $subject->variableName($parameterName));
    }

    #[DataProvider('providePathPropertyTypes')]
    public function testBuildPathPropertyFetchArrayItemsCastsNonStringScalars(array|string|null $type, string $expected): void
    {
        $subject = new class() {
            use InflectorTrait;
            use PathParameterNameTrait;

            /**
             * @param string[]                             $propertyNames
             * @param array<int, string|list<string>|null> $types
             *
             * @return ArrayItem[]
             */
            public function items(array $propertyNames, array $types): array
            {
                return $this->buildPathPropertyFetchArrayItems($propertyNames, $types);
            }
        };

        $items = $subject->items(['id'], [$type]);

        self::assertCount(1, $items);
        self::assertSame($expected, (new Standard())->prettyPrint($items));
    }

    public static function providePathPropertyTypes(): iterable
    {
        yield 'string is not cast' => ['string', 'rawurlencode($this->id)'];
        yield 'integer is cast' => ['integer', 'rawurlencode((string) $this->id)'];
        yield 'number is cast' => ['number', 'rawurlencode((string) $this->id)'];
        yield 'boolean is cast to 1/0' => ['boolean', 'rawurlencode((string) (int) $this->id)'];
        yield 'array is imploded' => ['array', "rawurlencode(implode(',', \$this->id))"];
        yield 'unknown type is left as-is' => [null, 'rawurlencode($this->id)'];

        // OpenAPI 3.1 "type" lists (issue #1166): a single non-null entry keeps
        // the scalar behavior, a real union cannot be safely coerced.
        yield 'list with single entry is imploded' => [['array'], "rawurlencode(implode(',', \$this->id))"];
        yield 'nullable list with single entry is imploded' => [['array', 'null'], "rawurlencode(implode(',', \$this->id))"];
        yield 'union list is left as-is' => [['integer', 'string'], 'rawurlencode($this->id)'];
        yield 'union list with array is left as-is' => [['integer', 'string', 'array'], 'rawurlencode($this->id)'];
        yield 'list reduced to null only is left as-is' => [['null'], 'rawurlencode($this->id)'];
    }
}
