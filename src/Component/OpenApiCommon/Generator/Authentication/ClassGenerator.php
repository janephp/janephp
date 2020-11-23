<?php

namespace Jane\Component\OpenApiCommon\Generator\Authentication;

use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait ClassGenerator
{
    protected function createClass(string $name, array $statements): Stmt\Class_
    {
        return new Stmt\Class_($name, [
            'stmts' => $statements,
            'implements' => [new Name\FullyQualified('Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin')],
        ]);
    }
}
