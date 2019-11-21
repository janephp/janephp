<?php

namespace Jane\OpenApi\Generator\Authentication;

use Http\Client\Common\Plugin;
use PhpParser\Node\Stmt;
use PhpParser\Node\Name;

trait GetPluginGenerator
{
    protected function createGetPlugin(): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getPlugin', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => [], // @todo
            'returnType' => new Name\FullyQualified(Plugin::class),
        ]);
    }
}
