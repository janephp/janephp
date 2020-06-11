<?php

namespace Jane\OpenApiCommon\Generator\Authentication;

use Http\Client\Common\Plugin;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait ClassGenerator
{
    protected function createAuthentication(string $name, array $statements): Stmt\Class_
    {
        return new Stmt\Class_($name, [
            'stmts' => $statements,
            'implements' => [new Name\FullyQualified(Plugin::class)],
        ]);
    }
}
