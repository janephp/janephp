<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\PropertyMapping;
use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar\String_;

class DateTimeToStringTansformer implements TransformerInterface
{
    private $format;

    public function __construct(string $format = \DateTimeInterface::RFC3339)
    {
        $this->format = $format;
    }

    /**
     * @return (Expr\MethodCall|array)[]
     *
     * @psalm-return array{0: Expr\MethodCall, 1: array<empty, empty>}
     */
    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope, PropertyMapping $propertyMapping): array
    {
        return [new Expr\MethodCall($input, 'format', [
            new Arg(new String_($this->format)),
        ]), []];
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
