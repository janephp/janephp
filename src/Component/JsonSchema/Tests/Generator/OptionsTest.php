<?php

namespace Jane\Component\JsonSchema\Tests\Generator;

use Jane\Component\JsonSchema\Generator\Options;
use PHPUnit\Framework\TestCase;

final class OptionsTest extends TestCase
{
    public function testUndeclaredStatusesThrowByDefault(): void
    {
        self::assertTrue(Options::defaults()->throwUnexpectedStatusCode);
        self::assertTrue(Options::fromArray([])->throwUnexpectedStatusCode);
        self::assertTrue(Options::fromArray([])->toArray()['throw-unexpected-status-code']);
    }

    public function testThrowingOnUndeclaredStatusesCanBeSwitchedOff(): void
    {
        self::assertFalse(Options::fromArray(['throw-unexpected-status-code' => false])->throwUnexpectedStatusCode);
    }

    public function testUnknownEnumValuesThrowByDefault(): void
    {
        self::assertSame(Options::ENUMS_UNKNOWN_VALUE_THROW, Options::defaults()->enumsUnknownValue);
        self::assertSame(Options::ENUMS_UNKNOWN_VALUE_THROW, Options::fromArray([])->toArray()['enums-unknown-value']);
    }

    public function testUnknownEnumValueHandlingCanBeConfigured(): void
    {
        self::assertSame(Options::ENUMS_UNKNOWN_VALUE_NULL, Options::fromArray(['enums-unknown-value' => 'null'])->enumsUnknownValue);
        self::assertSame(Options::ENUMS_UNKNOWN_VALUE_SCALAR, Options::fromArray(['enums-unknown-value' => 'scalar'])->enumsUnknownValue);
    }

    public function testPaginationIsOptIn(): void
    {
        self::assertSame([], Options::defaults()->pagination);
        self::assertSame([], Options::fromArray([])->toArray()['pagination']);
    }

    public function testPaginationRoundTrips(): void
    {
        $pagination = [['^/items$', 'GET', ['strategy' => 'cursor', 'param' => 'cursor', 'next-cursor' => 'meta.next', 'items' => 'data']]];

        self::assertSame($pagination, Options::fromArray(['pagination' => $pagination])->pagination);
        self::assertSame($pagination, Options::fromArray(['pagination' => $pagination])->toArray()['pagination']);
    }

    public function testAnUnsupportedUnknownEnumValueHandlingIsRejected(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The "enums-unknown-value" option must be one of "throw", "null", "scalar"; "ignore" given.');

        Options::fromArray(['enums-unknown-value' => 'ignore']);
    }
}
