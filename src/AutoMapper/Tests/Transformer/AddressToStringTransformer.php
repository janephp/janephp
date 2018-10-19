<?php

namespace Jane\AutoMapper\Tests\Transformer;

use Jane\AutoMapper\Compiler\Transformer\TransformerInterface;
use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Expr;

class AddressToStringTransformer implements TransformerInterface
{
    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope): array
    {
        return [new Expr\MethodCall($input, 'getCity'), []];
    }
}
