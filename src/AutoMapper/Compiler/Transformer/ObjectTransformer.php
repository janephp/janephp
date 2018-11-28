<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\UniqueVariableScope;
use Jane\AutoMapper\Compiler\MapperDependency;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Symfony\Component\PropertyInfo\Type;

class ObjectTransformer implements TransformerInterface
{
    private $sourceType;

    private $targetType;

    public function __construct(Type $sourceType, Type $targetType)
    {
        $this->sourceType = $sourceType;
        $this->targetType = $targetType;
    }

    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope): array
    {
        $mapperName = $this->getDependencyName();

        return [new Expr\MethodCall(new Expr\ArrayDimFetch(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'mappers'),
            new Scalar\String_($mapperName)
            ), 'map', [
                new Arg($input),
                new Arg(new Expr\Variable('context')),
        ]), []];
    }

    private function getDependencyName(): string
    {
        return 'Mapper_' . $this->getSource() . '_' . $this->getTarget();
    }

    private function getSource(): string
    {
        $sourceTypeName = 'array';

        if ($this->sourceType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
            $sourceTypeName = $this->sourceType->getClassName();
        }

        return $sourceTypeName;
    }

    private function getTarget(): string
    {
        $targetTypeName = 'array';

        if ($this->targetType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
            $targetTypeName = $this->targetType->getClassName();
        }

        return $targetTypeName;
    }

    public function assignByRef(): bool
    {
        return true;
    }

    public function getDependencies()
    {
        return [new MapperDependency($this->getDependencyName(), $this->getSource(), $this->getTarget())];
    }
}
