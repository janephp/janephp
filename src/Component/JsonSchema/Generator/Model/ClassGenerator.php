<?php

namespace Jane\Component\JsonSchema\Generator\Model;

use Jane\Component\JsonSchema\Generator\Naming;
use PhpParser\Comment\Doc;
use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait ClassGenerator
{
    /**
     * The naming service.
     */
    abstract protected function getNaming(): Naming;

    /**
     * Return a model class.
     *
     * @param Node[] $properties
     * @param Node[] $methods
     */
    protected function createModel(string $name, array $properties, array $methods, bool $hasExtensions = false, bool $deprecated = false): Stmt\Class_
    {
        $attributes = [];

        if ($deprecated) {
            $attributes['comments'] = [new Doc(<<<EOD
/**
 *
 * @deprecated
 */
EOD
            )];
        }

        return new Stmt\Class_(
            $this->getNaming()->getClassName($name),
            [
                'stmts' => array_merge($properties, $methods),
                'extends' => $hasExtensions ? new Name('\ArrayObject') : null,
            ],
            $attributes
        );
    }
}
