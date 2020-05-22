<?php

namespace Jane\OpenApiCommon\Generator\Authentication;

use Jane\OpenApiRuntime\Client\AuthenticationPlugin;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;

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
