<?php

namespace Jane\OpenApi\Generator\Authentication;

use PhpParser\Node\Stmt;

trait ConstructGenerator
{
    protected function createConstruct(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('__construct', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [], // @todo
            'stmts' => [], // @todo
        ]);
    }
}
