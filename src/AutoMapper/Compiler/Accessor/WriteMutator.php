<?php

namespace Jane\AutoMapper\Compiler\Accessor;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class WriteMutator
{
    const TYPE_METHOD = 1;
    const TYPE_PROPERTY = 2;
    const TYPE_ARRAY_DIMENSION = 3;
    const TYPE_CONSTRUCTOR = 4;

    private $type;

    private $name;

    private $private;

    private $parameter;

    public function __construct(int $type, string $name, bool $private = false, \ReflectionParameter $parameter = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->private = $private;
        $this->parameter = $parameter;
    }

    public function getExpression(Expr\Variable $output, Expr $value): ?Expr
    {
        if ($this->type === self::TYPE_METHOD) {
            return new Expr\MethodCall($output, $this->name, [
                new Arg($value),
            ]);
        }

        if ($this->type === self::TYPE_PROPERTY) {
            if ($this->private) {
                return new Expr\FuncCall(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'hydrateCallbacks'), new Scalar\String_($this->name)),
                    [
                        new Arg($output),
                        new Arg($value),
                    ]
                );
            }

            return new Expr\Assign(new Expr\PropertyFetch($output, $this->name), $value);
        }

        if ($this->type === self::TYPE_ARRAY_DIMENSION) {
            return new Expr\Assign(new Expr\ArrayDimFetch($output, new Scalar\String_($this->name)), $value);
        }

        if ($this->type === self::TYPE_CONSTRUCTOR) {
            return null;
        }

        throw new \RuntimeException('Invalid accessor for write expression');
    }

    public function getHydrateCallback($className)
    {
        if ($this->type !== self::TYPE_PROPERTY || !$this->private) {
            return null;
        }

        return new Expr\StaticCall(new Name\FullyQualified(\Closure::class), 'bind', [
            new Arg(new Expr\Closure([
                'params' => [
                    new Param(new Expr\Variable('object')),
                    new Param(new Expr\Variable('value')),
                ],
                'stmts' => [
                    new Stmt\Expression(new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('object'), $this->name), new Expr\Variable('value'))),
                ],
            ])),
            new Arg(new Expr\ConstFetch(new Name('null'))),
            new Arg(new Scalar\String_(new Name\FullyQualified($className))),
        ]);
    }

    public function getParameter(): ?\ReflectionParameter
    {
        return $this->parameter;
    }
}
