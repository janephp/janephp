<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Symfony\Component\PropertyInfo\Type;

class TransformerFactory
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

    /**
     * @param Type[] $sourcesTypes
     * @param Type[] $targetTypes
     *
     * @return null|TransformerInterface
     */
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes): ?TransformerInterface
    {
        if (null === $sourcesTypes || \count($sourcesTypes) === 0) {
            return null;
        }

        if (\count($sourcesTypes) > 1) {
            $transformer = new MultipleTransformer();

            foreach ($sourcesTypes as $sourceType) {
                $transformer->addTransformer($this->getTransformer([$sourceType], $targetTypes), $sourceType);
            }

            return $transformer;
        }

        /** @var Type $propertyType */
        $propertyType = $sourcesTypes[0];
        $transformer = null;

        if (\in_array($propertyType->getBuiltinType(), self::BUILTIN, true)) {
            return new BuiltinTransformer($propertyType, $targetTypes);
        }

        if ($propertyType->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY) {
            $targetType = $this->getTargetType($propertyType, $targetTypes);

            if (null !== $targetType) {
                $subItemTransformer = $this->getTransformer([$propertyType->getCollectionValueType()], [$targetType->getCollectionValueType()]);

                return new ArrayTransformer($subItemTransformer);
            }

            return null;
        }

        if ($propertyType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
            $targetType = $this->getTargetType($propertyType, $targetTypes);

            if (null !== $targetType) {
                return new ObjectTransformer($targetType);
            }

            return null;
        }

        return null;
    }

    protected function getTargetType(Type $sourceType, array $targetTypes = []): ?Type
    {
        if ($sourceType->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY) {
            foreach ($targetTypes as $targetType) {
                if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY) {
                    return $targetType;
                }
            }

            return null;
        }

        if ($sourceType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
            foreach ($targetTypes as $targetType) {
                if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
                    return $targetType;
                }
            }

            return null;
        }

        return null;
    }
}
