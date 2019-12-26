<?php

namespace Jane\OpenApiCommon\Generator\Authentication;

use Jane\OpenApiRuntime\Client\Authentication;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;

trait ClassGenerator
{
    protected function createAuthentication(string $name, array $properties, array $methods): Stmt\Class_
    {
        return new Stmt\Class_($name, [
            'stmts' => array_merge($properties, $methods),
            'implements' => [new Name\FullyQualified(Authentication::class)],
        ]);
    }
}
