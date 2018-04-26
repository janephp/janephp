<?php

namespace Jane\AutoMapper\Compiler\Accessor;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;

class WriteMutator
{
    const TYPE_METHOD = 1;
    const TYPE_PROPERTY = 2;
    const TYPE_ARRAY_DIMENSION = 3;
    const TYPE_CONSTRUCTOR = 4;

    private $type;

    private $name;

    private $remover;

    private $ref;

    private $private;

    public function __construct(int $type, string $name, bool $ref = false, ?string $remover = null, bool $private = false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->ref = $ref;
        $this->remover = $remover;
        $this->private = $private;
    }

    public function getExpression(Expr\Variable $output, Expr $value): Expr
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

        throw new \RuntimeException('Invalid accessor for read expression');
    }

    public function getHydrateCallback($className)
    {
        if ($this->type !== self::TYPE_PROPERTY || !$this->private) {
            return null;
        }

        return new Expr\StaticCall(new Name\FullyQualified(\Closure::class), 'bind', [
            new Arg(new Expr\Closure([
                'params' => [
                    new Param('object'),
                    new Param('value'),
                ],
                'stmts' => [
                    new Expr\Assign(new Expr\PropertyFetch(new Expr\Variable('object'), $this->name), new Expr\Variable('value')),
                ],
            ])),
            new Arg(new Expr\ConstFetch(new Name('null'))),
            new Arg(new Scalar\String_(new Name\FullyQualified($className))),
        ]);
    }
}
