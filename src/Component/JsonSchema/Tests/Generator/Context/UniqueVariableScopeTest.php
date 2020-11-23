<?php

namespace Jane\Component\JsonSchema\Generator\Context\Tests;

use Jane\Component\JsonSchema\Generator\Context\UniqueVariableScope;
use PHPUnit\Framework\TestCase;

class UniqueVariableScopeTest extends TestCase
{
    public function testUniqueVariable(): void
    {
        $uniqueVariableScope = new UniqueVariableScope();

        $name = $uniqueVariableScope->getUniqueName('name');
        $this->assertEquals('name', $name);

        $name = $uniqueVariableScope->getUniqueName('name');
        $this->assertEquals('name_1', $name);

        $name = $uniqueVariableScope->getUniqueName('name');
        $this->assertEquals('name_2', $name);
    }
}
