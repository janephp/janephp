<?php

namespace Jane\AutoMapper\Compiler\Accessor;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class ReadAccessor
{
    const TYPE_METHOD = 1;
    const TYPE_PROPERTY = 2;
    const TYPE_ARRAY_DIMENSION = 3;

    private $type;

    private $name;

    private $checkExist;

    public function __construct(int $type, string $name, bool $checkExist = false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->checkExist = $checkExist;
    }

    public function getExpression(Expr\Variable $input): Expr
    {
        if ($this->type === self::TYPE_METHOD) {
            return new Expr\MethodCall($input, $this->name);
        }

        if ($this->type === self::TYPE_PROPERTY) {
            return new Expr\PropertyFetch($input, $this->name);

            if ($this->checkExist) {
                $expr = new Stmt\If_(new Expr\FuncCall(new Name('property_exists'), [
                    new Arg(new Scalar\String_($this->name)),
                ]), [
                    'stmts' => [$expr],
                ]);
            }

            return $expr;
        }

        if ($this->type === self::TYPE_ARRAY_DIMENSION) {
            return new Expr\ArrayDimFetch($input, new Scalar\String_($this->name));
        }

        throw new \RuntimeException('Invalid accessor for read expression');
    }
}
