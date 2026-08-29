<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiCommon\Tests\Registry;

use Jane\Component\OpenApiCommon\Registry\Registry;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    public function testGettersHaveUsableDefaultsWithoutExplicitInitialization(): void
    {
        $registry = new Registry();

        self::assertSame([], $registry->getWhitelistedPaths());
        self::assertSame([], $registry->getCustomQueryResolver());
        self::assertFalse($registry->getThrowUnexpectedStatusCode());
        self::assertTrue($registry->getGenerateErrorExceptions());
    }

    public function testOptionsHashIsComputableOnAFreshRegistry(): void
    {
        $registry = new Registry();

        // Regression: reading the hash used to fatal with "typed property must
        // not be accessed before initialization" when options were never set.
        self::assertNotEmpty($registry->getOptionsHash());
    }

    public function testSettersStillOverrideDefaults(): void
    {
        $registry = new Registry();
        $registry->setWhitelistedPaths(['/foo']);
        $registry->setCustomQueryResolver(['__type' => ['get' => 'Bar']]);
        $registry->setThrowUnexpectedStatusCode(true);
        $registry->setGenerateErrorExceptions(false);

        self::assertSame(['/foo'], $registry->getWhitelistedPaths());
        self::assertSame(['__type' => ['get' => 'Bar']], $registry->getCustomQueryResolver());
        self::assertTrue($registry->getThrowUnexpectedStatusCode());
        self::assertFalse($registry->getGenerateErrorExceptions());
    }
}
