<?php

namespace Jane\AutoMapper\Compiler\Accessor;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

class WriteMutator
{
    const TYPE_METHOD = 1;
    const TYPE_PROPERTY = 2;
    const TYPE_ARRAY_DIMENSION = 3;

    private $type;

    private $name;

    private $remover;

    private $ref;

    public function __construct(int $type, string $name, bool $ref = false, ?string $remover = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->ref = $ref;
        $this->remover = $remover;
    }

    public function getExpression(Expr\Variable $output, Expr $value): Expr
    {
        if ($this->type === self::TYPE_METHOD) {
            return new Expr\MethodCall($output, $this->name, [
                new Arg($value),
            ]);
        }

        if ($this->type === self::TYPE_PROPERTY) {
            return new Expr\Assign(new Expr\PropertyFetch($output, $this->name), $value);
        }

        if ($this->type === self::TYPE_ARRAY_DIMENSION) {
            return new Expr\Assign(new Expr\ArrayDimFetch($output, new Scalar\String_($this->name)), $value);
        }

        throw new \RuntimeException('Invalid accessor for read expression');
    }
}
