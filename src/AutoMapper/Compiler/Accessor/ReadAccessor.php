<?php

namespace Jane\AutoMapper\Compiler\Accessor;

use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

class ReadAccessor
{
    const TYPE_METHOD = 1;
    const TYPE_PROPERTY = 2;
    const TYPE_ARRAY_DIMENSION = 3;
    const TYPE_SOURCE = 4;

    private $type;

    private $name;

    public function __construct(int $type, string $name)
    {
        $this->type = $type;
        $this->name = $name;
    }

    public function getExpression(Expr\Variable $input): Expr
    {
        if ($this->type === self::TYPE_METHOD) {
            return new Expr\MethodCall($input, $this->name);
        }

        if ($this->type === self::TYPE_PROPERTY) {
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
}
