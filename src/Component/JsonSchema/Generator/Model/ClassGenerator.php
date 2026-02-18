<?php

namespace Jane\Component\JsonSchema\Generator\Model;

use Jane\Component\JsonSchema\Generator\Naming;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
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
 * @deprecated
 */
EOD
            )];
        }

        return new Stmt\Class_(
            $this->getNaming()->getClassName($name),
            [
                'stmts' => array_merge($this->getInitialized(), $properties, $methods),
                'extends' => $hasExtensions ? new Name('\ArrayObject') : null,
            ],
            $attributes
        );
    }

    protected function getInitialized(): array
    {
        $initializedProperty = new Stmt\Property(Modifiers::PROTECTED, [new Stmt\PropertyProperty('initialized', new Expr\Array_())], ['comments' => [new Doc(<<<EOD
/**
 * @var array
 */
EOD
        )]]);
        $initializedMethod = new Stmt\ClassMethod(
            'isInitialized',
            [
                // public function
                'flags' => Modifiers::PUBLIC,
                'params' => [new Node\Param($propertyVariable = new Expr\Variable('property'))],
                'stmts' => [
                    new Stmt\Return_(
                        new Expr\FuncCall(new Name('array_key_exists'), [new Node\Arg($propertyVariable), new Node\Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'initialized'))])
                    ),
                ],
                'returnType' => new Name('bool'),
            ]
        );

        return [$initializedProperty, $initializedMethod];
    }
}
