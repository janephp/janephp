<?php

namespace Jane\AutoMapper\Compiler\Accessor;

use function Jane\parserVariable;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class ReadAccessor
{
    const TYPE_METHOD = 1;
    const TYPE_PROPERTY = 2;
    const TYPE_ARRAY_DIMENSION = 3;
    const TYPE_SOURCE = 4;

    private $type;

    private $name;

    private $private;

    public function __construct(int $type, string $name, $private = false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->private = $private;
    }

    public function getExpression(Expr\Variable $input): Expr
    {
        if ($this->type === self::TYPE_METHOD) {
            return new Expr\MethodCall($input, $this->name);
        }

        if ($this->type === self::TYPE_PROPERTY) {
            if ($this->private) {
                return new Expr\FuncCall(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'extractCallbacks'), new Scalar\String_($this->name)),
                    [
                        new Arg($input),
                    ]
                );
            }

            return new Expr\PropertyFetch($input, $this->name);
        }

        if ($this->type === self::TYPE_ARRAY_DIMENSION) {
            return new Expr\ArrayDimFetch($input, new Scalar\String_($this->name));
        }

        if ($this->type === self::TYPE_SOURCE) {
            return $input;
        }

        throw new \RuntimeException('Invalid accessor for read expression');
    }

    public function getExtractCallback($className)
    {
        if ($this->type !== self::TYPE_PROPERTY || !$this->private) {
            return null;
        }

        return new Expr\StaticCall(new Name\FullyQualified(\Closure::class), 'bind', [
            new Arg(new Expr\Closure([
                'params' => [
                    new Param(parserVariable('object')),
                ],
                'stmts' => [
                    new Stmt\Return_(new Expr\PropertyFetch(new Expr\Variable('object'), $this->name)),
                ],
            ])),
            new Arg(new Expr\ConstFetch(new Name('null'))),
            new Arg(new Scalar\String_(new Name\FullyQualified($className))),
        ]);
    }
}
