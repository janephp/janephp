<?php

namespace Jane\JsonSchema\Generator\Proxy;

use Jane\JsonSchema\Generator\Naming;
use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait ClassGenerator
{
    /**
     * The naming service.
     *
     * @return Naming
     */
    abstract protected function getNaming();

    /**
     * Return a model class.
     *
     * @param string $name
     * @param Node[] $methods
     * @param bool   $hasExtensions
     *
     * @return Stmt\Class_
     */
    protected function createProxy(string $name, string $namespace, array $methods): Stmt\Class_
    {
        return new Stmt\Class_(
            new Name($this->getNaming()->getProxyName($name)),
            [
                'stmts' => $methods,
                'extends' => new Name(sprintf('\\%s\\Model\\%s', $namespace, $this->getNaming()->getClassName($name))),
            ]
        );
    }
}
