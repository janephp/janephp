<?php

namespace Jane\AutoMapper\Compiler\Transformer;

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

    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope): array
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
}
