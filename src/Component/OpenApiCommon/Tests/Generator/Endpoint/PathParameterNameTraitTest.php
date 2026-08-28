<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Tests\Generator\Endpoint;

use Jane\Component\JsonSchema\Tools\InflectorTrait;
use Jane\Component\OpenApiCommon\Generator\Endpoint\PathParameterNameTrait;
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

    /**
     * @dataProvider provideParameterNames
     */
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
}
