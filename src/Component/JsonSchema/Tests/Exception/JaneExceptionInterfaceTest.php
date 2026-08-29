<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchema\Tests\Exception;

use Jane\Component\JsonSchema\Exception\JaneExceptionInterface as LegacyJaneExceptionInterface;
use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface as RuntimeJaneExceptionInterface;
use PHPUnit\Framework\TestCase;

class JaneExceptionInterfaceTest extends TestCase
{
    public function testLegacyMarkerExtendsTheRuntimeMarker(): void
    {
        // Backward-compatibility contract: code implementing (or catching) the
        // historical JsonSchema marker keeps working now that the marker lives
        // in the runtime component.
        self::assertTrue(
            is_a(LegacyJaneExceptionInterface::class, RuntimeJaneExceptionInterface::class, true)
        );
    }
}
