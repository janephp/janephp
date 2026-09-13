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
}
