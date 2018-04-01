<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Expr;
use Symfony\Component\PropertyInfo\Type;

class BuiltinTransformer implements TransformerInterface
{
    const BUILTIN_TYPE_MIXED = 'mixed';

    public const CAST_MAPPING = [
        Type::BUILTIN_TYPE_BOOL => [

        ],
        Type::BUILTIN_TYPE_FLOAT => [

        ],
        Type::BUILTIN_TYPE_INT => [

        ],
        Type::BUILTIN_TYPE_ITERABLE => [

        ],
        Type::BUILTIN_TYPE_STRING => [

        ],
        self::BUILTIN_TYPE_MIXED => [

        ],
        Type::BUILTIN_TYPE_CALLABLE => [],
        Type::BUILTIN_TYPE_RESOURCE => [],
    ];

    private $sourceType;

    private $targetTypes;

    public function __construct(Type $sourceType, array $targetTypes)
    {
        $this->sourceType = $sourceType;
        $this->targetTypes = $sourceType;
    }

    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope): array
    {
        return [$input, []];
    }

    public function isArray(): bool
    {
        return false;
    }
}