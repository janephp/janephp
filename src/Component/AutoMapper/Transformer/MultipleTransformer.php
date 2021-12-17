<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\Extractor\PropertyMapping;
use Jane\Component\AutoMapper\Generator\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use Symfony\Component\PropertyInfo\Type;

/**
 * Multiple transformer decorator.
 *
 * Decorate transformers with condition to handle property with multiples source types
 * It will always use the first target type possible for transformation
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class MultipleTransformer implements TransformerInterface, DependentTransformerInterface
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

    public function __construct(array $transformers)
    {
        $this->transformers = $transformers;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, Expr $target, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        $output = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));
        $statements = [
            new Stmt\Expression(new Expr\Assign($output, $input)),
        ];

        foreach ($this->transformers as $transformerData) {
            $transformer = $transformerData['transformer'];
            $type = $transformerData['type'];

            [$transformerOutput, $transformerStatements] = $transformer->transform($input, $target, $propertyMapping, $uniqueVariableScope);

            $assignClass = ($transformer instanceof AssignedByReferenceTransformerInterface && $transformer->assignByRef()) ? Expr\AssignRef::class : Expr\Assign::class;
            $statements[] = new Stmt\If_(
                new Expr\FuncCall(
                    new Name(self::CONDITION_MAPPING[$type->getBuiltinType()]),
                    [
                        new Arg($input),
                    ]
                ),
                [
                    'stmts' => array_merge(
                        $transformerStatements,
                        [
                            new Stmt\Expression(new $assignClass($output, $transformerOutput)),
                        ]
                    ),
                ]
            );
        }

        return [$output, $statements];
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(): array
    {
        $dependencies = [];

        foreach ($this->transformers as $transformerData) {
            if ($transformerData['transformer'] instanceof DependentTransformerInterface) {
                $dependencies = array_merge($dependencies, $transformerData['transformer']->getDependencies());
            }
        }

        return $dependencies;
    }
}
