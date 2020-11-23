<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\Extractor\PropertyMapping;
use Jane\Component\AutoMapper\Generator\UniqueVariableScope;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Cast;
use PhpParser\Node\Name;
use Symfony\Component\PropertyInfo\Type;

/**
 * Built in transformer to handle PHP scalar types.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class BuiltinTransformer implements TransformerInterface
{
    private const CAST_MAPPING = [
        Type::BUILTIN_TYPE_BOOL => [
            Type::BUILTIN_TYPE_INT => Cast\Int_::class,
            Type::BUILTIN_TYPE_STRING => Cast\String_::class,
            Type::BUILTIN_TYPE_FLOAT => Cast\Double::class,
            Type::BUILTIN_TYPE_ARRAY => 'toArray',
            Type::BUILTIN_TYPE_ITERABLE => 'toArray',
        ],
        Type::BUILTIN_TYPE_FLOAT => [
            Type::BUILTIN_TYPE_STRING => Cast\String_::class,
            Type::BUILTIN_TYPE_INT => Cast\Int_::class,
            Type::BUILTIN_TYPE_BOOL => Cast\Bool_::class,
            Type::BUILTIN_TYPE_ARRAY => 'toArray',
            Type::BUILTIN_TYPE_ITERABLE => 'toArray',
        ],
        Type::BUILTIN_TYPE_INT => [
            Type::BUILTIN_TYPE_FLOAT => Cast\Double::class,
            Type::BUILTIN_TYPE_STRING => Cast\String_::class,
            Type::BUILTIN_TYPE_BOOL => Cast\Bool_::class,
            Type::BUILTIN_TYPE_ARRAY => 'toArray',
            Type::BUILTIN_TYPE_ITERABLE => 'toArray',
        ],
        Type::BUILTIN_TYPE_ITERABLE => [
            Type::BUILTIN_TYPE_ARRAY => 'fromIteratorToArray',
        ],
        Type::BUILTIN_TYPE_ARRAY => [],
        Type::BUILTIN_TYPE_STRING => [
            Type::BUILTIN_TYPE_ARRAY => 'toArray',
            Type::BUILTIN_TYPE_ITERABLE => 'toArray',
            Type::BUILTIN_TYPE_FLOAT => Cast\Double::class,
            Type::BUILTIN_TYPE_INT => Cast\Int_::class,
            Type::BUILTIN_TYPE_BOOL => Cast\Bool_::class,
        ],
        Type::BUILTIN_TYPE_CALLABLE => [],
        Type::BUILTIN_TYPE_RESOURCE => [],
    ];

    /** @var Type */
    private $sourceType;

    /** @var Type[] */
    private $targetTypes;

    public function __construct(Type $sourceType, array $targetTypes)
    {
        $this->sourceType = $sourceType;
        $this->targetTypes = $targetTypes;
    }

    /**
     * {@inheritdoc}
     */
    public function transform(Expr $input, Expr $target, PropertyMapping $propertyMapping, UniqueVariableScope $uniqueVariableScope): array
    {
        $targetTypes = array_map(function (Type $type) {
            return $type->getBuiltinType();
        }, $this->targetTypes);

        // Source type is in target => no cast
        if (\in_array($this->sourceType->getBuiltinType(), $targetTypes, true)) {
            return [$input, []];
        }

        // Cast needed
        foreach (self::CAST_MAPPING[$this->sourceType->getBuiltinType()] as $castType => $castMethod) {
            if (\in_array($castType, $targetTypes, true)) {
                if (method_exists($this, $castMethod)) {
                    return [$this->$castMethod($input), []];
                }

                return [new $castMethod($input), []];
            }
        }

        return [$input, []];
    }

    private function toArray(Expr $input)
    {
        return new Expr\Array_([new Expr\ArrayItem($input)]);
    }

    private function fromIteratorToArray(Expr $input)
    {
        return new Expr\FuncCall(new Name('iterator_to_array'), [
            new Arg($input),
        ]);
    }
}
