<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Symfony\Component\PropertyInfo\Type;

class ObjectTransformer implements TransformerInterface
{
    private $targetType;

    public function __construct(Type $targetType)
    {
        $this->targetType = $targetType;
    }

    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope): array
    {
        $targetTypeName = 'array';

        if ($this->targetType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
            $targetTypeName = $this->targetType->getClassName();
        }

        return [new Expr\MethodCall(new Expr\PropertyFetch(new Expr\Variable('this'), 'autoMapper'), 'map', [
            new Arg($input),
            new Arg(new Scalar\String_($targetTypeName)),
            new Arg(new Expr\Variable('context')),
        ]), []];
    }
}
