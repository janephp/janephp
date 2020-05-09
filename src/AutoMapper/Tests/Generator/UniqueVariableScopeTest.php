<?php

namespace Jane\AutoMapper\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Jane\AutoMapper\Generator\UniqueVariableScope;

class UniqueVariableScopeTest extends TestCase
{
    public function testVariableNameNotEquals(): void
    {
        $uniqueVariable = new UniqueVariableScope();
        $var1 = $uniqueVariable->getUniqueName('value');
        $var2 = $uniqueVariable->getUniqueName('value');
        $var3 = $uniqueVariable->getUniqueName('VALUE');

        self::assertNotSame($var1, $var2);
        self::assertNotSame($var1, $var3);
        self::assertNotSame($var2, $var3);
        self::assertNotSame(strtolower($var1), strtolower($var3));
    }
}
