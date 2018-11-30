<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\MapperConfigurationInterface;
use Symfony\Component\PropertyInfo\Type;

class BuiltinTransformerFactory implements TransformerFactoryInterface
{
    private const BUILTIN = [
        Type::BUILTIN_TYPE_BOOL,
        Type::BUILTIN_TYPE_CALLABLE,
        Type::BUILTIN_TYPE_FLOAT,
        Type::BUILTIN_TYPE_INT,
        Type::BUILTIN_TYPE_ITERABLE,
        Type::BUILTIN_TYPE_NULL,
        Type::BUILTIN_TYPE_RESOURCE,
        Type::BUILTIN_TYPE_STRING,
    ];

    public function getTransformer(?array $sourcesTypes, ?array $targetTypes, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        $nbSourcesTypes = $sourcesTypes ? \count($sourcesTypes) : 0;

        if (null === $sourcesTypes || $nbSourcesTypes === 0 || $nbSourcesTypes > 1 || !$sourcesTypes[0] instanceof Type) {
            return null;
        }

        /** @var Type $propertyType */
        $propertyType = $sourcesTypes[0];

        if (\in_array($propertyType->getBuiltinType(), self::BUILTIN, true)) {
            return new BuiltinTransformer($propertyType, $targetTypes);
        }

        return null;
    }
}
