<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\PropertyMapping;
use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar\String_;

class StringToDateTimeTransformer implements TransformerInterface
{
    private $className;

    private $format;

    public function __construct(string $className, string $format = \DateTimeInterface::RFC3339)
    {
        $this->className = $className;
        $this->format = $format;
    }

    /**
     * @return (Expr\StaticCall|array)[]
     *
     * @psalm-return array{0: Expr\StaticCall, 1: array<empty, empty>}
     */
    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope, PropertyMapping $propertyMapping): array
    {
        return [new Expr\StaticCall(new Name\FullyQualified($this->className), 'createFromFormat', [
            new Arg(new String_($this->format)),
            new Arg($input),
        ]), []];
    }

    public function assignByRef(): bool
    {
        return false;
    }

    public function getDependencies()
    {
        return [];
    }
}
