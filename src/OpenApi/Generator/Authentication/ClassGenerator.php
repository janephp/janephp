<?php

namespace Jane\OpenApi\Generator\Authentication;

use Jane\JsonSchema\Generator\Naming;
use Jane\OpenApiRuntime\Client\Authentication;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;

trait ClassGenerator
{
    protected function createAuthentication(string $name, array $methods): Stmt\Class_
    {
        return new Stmt\Class_($name, [
            'stmts' => $methods,
            'implements' => [new Name\FullyQualified(Authentication::class)],
        ]);
    }
}
