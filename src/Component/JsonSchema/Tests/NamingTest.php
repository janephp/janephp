<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchema\Tests;

use Jane\Component\JsonSchema\Generator\Naming;
use PHPUnit\Framework\TestCase;

final class NamingTest extends TestCase
{
    public static function provideReservedClassNames(): iterable
    {
        // PHP rejects these outright as class names ("Cannot use 'Parent' as class name as it is reserved")
        yield 'parent' => ['parent', '_Parent'];
        yield 'self' => ['self', '_Self'];
        yield 'static' => ['static', '_Static'];
    }

    /**
     * @dataProvider provideReservedClassNames
     */
    public function testReservedClassNamesArePrefixed(string $name, string $expected): void
    {
        $naming = new Naming();

        self::assertSame($expected, $naming->getClassName($name));
    }

    public static function provideRegularClassNames(): iterable
    {
        yield 'simple' => ['foo', 'Foo'];
        yield 'contains reserved word' => ['parentChild', 'ParentChild'];
        yield 'keyword' => ['class', '_Class'];
    }

    /**
     * @dataProvider provideRegularClassNames
     */
    public function testRegularClassNames(string $name, string $expected): void
    {
        $naming = new Naming();

        self::assertSame($expected, $naming->getClassName($name));
    }
}
