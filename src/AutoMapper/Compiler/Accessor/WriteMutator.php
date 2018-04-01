<?php

namespace Jane\AutoMapper\Compiler\Accessor;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;

class WriteMutator
{
    const TYPE_METHOD = 1;
    const TYPE_PROPERTY = 2;
    const TYPE_ADDER_AND_REMOVER = 3;

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
        if ($this->type === self::TYPE_METHOD || $this->type === self::TYPE_ADDER_AND_REMOVER) {
            return new Expr\MethodCall($output, $this->name, [
                new Arg($value),
            ]);
        }

        if ($this->type === self::TYPE_PROPERTY) {
            return new Expr\Assign(new Expr\PropertyFetch($output, $this->name), $value);
        }

        throw new \RuntimeException('Invalid accessor for read expression');
    }
}
