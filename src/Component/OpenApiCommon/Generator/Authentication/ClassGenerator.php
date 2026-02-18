<?php

namespace Jane\Component\OpenApiCommon\Generator\Authentication;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait ClassGenerator
{
    protected function createClass(string $name, array $statements): Stmt\Class_
    {
        return new Stmt\Class_($name, [
            'stmts' => $statements,
            'implements' => [new Name\FullyQualified(AuthenticationPlugin::class)],
        ]);
    }
}
