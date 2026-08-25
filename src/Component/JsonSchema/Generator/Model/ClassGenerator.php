<?php

namespace Jane\Component\JsonSchema\Generator\Model;

use Jane\Component\JsonSchema\Generator\Naming;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
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
     * @param Node[]                                                $properties
     * @param Node[]                                                $methods
     * @param array<string, array{0: string, 1: string, 2: string}> $definedProperties Map of PHP property name to wire name, getter and setter method names
     */
    protected function createModel(
        string $name,
        array $properties,
        array $methods,
        bool $useExtensionsRuntime = false,
        bool $deprecated = false,
        ?string $extends = null,
        ?string $runtimeTraitFqcn = null,
        ?string $runtimeInterfaceFqcn = null,
        array $definedProperties = [],
        bool $inheritDefinedProperties = false,
    ): Stmt\Class_ {
        $attributes = [];

        if ($deprecated) {
            $attributes['comments'] = [new Doc(<<<EOD
/**
 * @deprecated
 */
EOD
            )];
        }

        $stmts = array_merge($this->getInitialized(), $properties, $methods);
        $implements = [];

        if ($useExtensionsRuntime && null !== $runtimeTraitFqcn && null !== $runtimeInterfaceFqcn) {
            // References rely on the `use` statements emitted alongside the model in its namespace.
            $implements[] = new Name(substr($runtimeInterfaceFqcn, strrpos($runtimeInterfaceFqcn, '\\') + 1));
            array_unshift($stmts, new Stmt\TraitUse([new Name(substr($runtimeTraitFqcn, strrpos($runtimeTraitFqcn, '\\') + 1))]));
        }

        if ([] !== $definedProperties && ($useExtensionsRuntime || $inheritDefinedProperties)) {
            $stmts[] = $this->createDefinedPropertiesMethod($definedProperties, $inheritDefinedProperties);
        }

        return new Stmt\Class_(
            $this->getNaming()->getClassName($name),
            [
                'stmts' => $stmts,
                'extends' => null !== $extends ? new Name($extends) : null,
                'implements' => $implements,
            ],
            $attributes
        );
    }

    /**
     * Create the `definedProperties()` method describing the properties declared by the model class.
     *
     * @param array<string, array{0: string, 1: string, 2: string}> $definedProperties
     */
    private function createDefinedPropertiesMethod(array $definedProperties, bool $inherited): Stmt\ClassMethod
    {
        $items = [];
        foreach ($definedProperties as $phpName => [$wireName, $getterName, $setterName]) {
            $items[] = new Expr\ArrayItem(
                new Expr\Array_([
                    new Expr\ArrayItem(new Scalar\String_($wireName)),
                    new Expr\ArrayItem(new Scalar\String_($getterName)),
                    new Expr\ArrayItem(new Scalar\String_($setterName)),
                ]),
                new Scalar\String_($phpName),
            );
        }

        $return = new Expr\Array_($items);
        if ($inherited) {
            $return = new Expr\FuncCall(new Name('array_merge'), [
                new Arg(new Expr\StaticCall(new Name('parent'), 'definedProperties')),
                new Arg($return),
            ]);
        }

        return new Stmt\ClassMethod('definedProperties', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Name('array'),
            'stmts' => [new Stmt\Return_($return)],
        ]);
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
                        new Expr\FuncCall(new Name('array_key_exists'), [new Arg($propertyVariable), new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'initialized'))])
                    ),
                ],
                'returnType' => new Name('bool'),
            ]
        );

        return [$initializedProperty, $initializedMethod];
    }
}
