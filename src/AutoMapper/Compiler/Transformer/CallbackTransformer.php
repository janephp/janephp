<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\PropertyMapping;
use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;

class CallbackTransformer implements TransformerInterface
{
    private $callbackName;

    public function __construct(string $callbackName)
    {
        $this->callbackName = $callbackName;
    }

    /**
     * @return (Expr\FuncCall|array)[]
     *
     * @psalm-return array{0: Expr\FuncCall, 1: array<empty, empty>}
     */
    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope, PropertyMapping $propertyMapping): array
    {
        /*
         * $output = $this->callbacks[$callbackName]($input);
         */
        return [new Expr\FuncCall(
            new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'callbacks'), new Scalar\String_($this->callbackName)), [
                new Arg($input),
            ]),
            [],
        ];
    }

    public function getDependencies()
    {
        return [];
    }

    public function assignByRef(): bool
    {
        return false;
    }
}
