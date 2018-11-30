<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\Compiler\PropertyMapping;
use Jane\AutoMapper\Compiler\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use Symfony\Component\PropertyInfo\Type;

class MultipleTransformer implements TransformerInterface
{
    private const CONDITION_MAPPING = [
        Type::BUILTIN_TYPE_BOOL => 'is_bool',
        Type::BUILTIN_TYPE_INT => 'is_int',
        Type::BUILTIN_TYPE_FLOAT => 'is_float',
        Type::BUILTIN_TYPE_STRING => 'is_string',
        Type::BUILTIN_TYPE_NULL => 'is_null',
        Type::BUILTIN_TYPE_ARRAY => 'is_array',
        Type::BUILTIN_TYPE_OBJECT => 'is_object',
        Type::BUILTIN_TYPE_RESOURCE => 'is_resource',
        Type::BUILTIN_TYPE_CALLABLE => 'is_callable',
        Type::BUILTIN_TYPE_ITERABLE => 'is_iterable',
    ];

    private $transformers = [];

    public function addTransformer(TransformerInterface $transformer, Type $sourceType)
    {
        $this->transformers[] = [
            'transformer' => $transformer,
            'type' => $sourceType,
        ];
    }

    public function transform(Expr $input, UniqueVariableScope $uniqueVariableScope, PropertyMapping $propertyMapping): array
    {
        $output = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));
        $statements = [
            new Stmt\Expression(new Expr\Assign($output, $input)),
        ];

        foreach ($this->transformers as $transformerData) {
            $transformer = $transformerData['transformer'];
            $type = $transformerData['type'];

            [$transformerOutput, $transformerStatements] = $transformer->transform($input, $uniqueVariableScope, $propertyMapping);

            $assignClass = $transformer->assignByRef() ? Expr\AssignRef::class : Expr\Assign::class;
            $statements[] = new Stmt\If_(
                new Expr\FuncCall(
                    new Name(self::CONDITION_MAPPING[$type->getBuiltinType()]),
                    [
                        new Arg($input),
                    ]
                ),
                [
                    'stmts' => array_merge(
                        $transformerStatements, [
                            new Stmt\Expression(new $assignClass($output, $transformerOutput)),
                        ]
                    ),
                ]
            );
        }

        return [$output, $statements];
    }

    public function assignByRef(): bool
    {
        return false;
    }

    public function getDependencies()
    {
        $dependencies = [];

        foreach ($this->transformers as $transformerData) {
            $dependencies = array_merge($dependencies, $transformerData['transformer']->getDependencies());
        }

        return $dependencies;
    }

    public function isArray(): bool
    {
        return false;
    }
}
