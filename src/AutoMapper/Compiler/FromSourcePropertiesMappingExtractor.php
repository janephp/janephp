<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\WriteMutator;
use SebastianBergmann\GlobalState\RuntimeException;
use Symfony\Component\PropertyInfo\Type;

class FromSourcePropertiesMappingExtractor extends PropertiesMappingExtractor
{
    public function getPropertiesMapping(string $source, string $target, bool $allowConstruct = true): array
    {
        $sourceProperties = $this->propertyInfoExtractor->getProperties($source);

        if (!\in_array($target, ['array', \stdClass::class])) {
            throw new RuntimeException('Only array or stdClass are accepted as a target');
        }

        if (null === $sourceProperties) {
            return [];
        }

        $mapping = [];

        foreach ($sourceProperties as $property) {
            if (!$this->propertyInfoExtractor->isReadable($source, $property)) {
                continue;
            }

            $sourceTypes = $this->propertyInfoExtractor->getTypes($source, $property);

            if ($sourceTypes === null) {
                continue;
            }

            $targetTypes = [];

            foreach ($sourceTypes as $type) {
                $targetTypes[] = $this->transformType($target, $type);
            }

            $transformer = $this->transformerFactory->getTransformer($sourceTypes, $targetTypes);

            if (null === $transformer) {
                continue;
            }

            $targetMutator = $this->getWriteMutator($target, $property);
            $sourceAccessor = $this->accessorExtractor->getReadAccessor($source, $property);
            $mapping[] = new PropertyMapping(
                $sourceAccessor,
                $targetMutator,
                $transformer,
                $property,
                false,
                $this->getGroups($source, $property),
                $this->getGroups($target, $property)
            );
        }

        return $mapping;
    }

    private function transformType(string $target, Type $type = null): ?Type
    {
        if ($type === null) {
            return null;
        }

        $builtinType = $type->getBuiltinType();
        $className = $type->getClassName();

        if ($type->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT && $type->getClassName() !== \stdClass::class) {
            $builtinType = $target === 'array' ? Type::BUILTIN_TYPE_ARRAY : Type::BUILTIN_TYPE_OBJECT;
            $className = $target === 'array' ? null : \stdClass::class;
        }

        return new Type(
            $builtinType,
            $type->isNullable(),
            $className,
            $type->isCollection(),
            $this->transformType($target, $type->getCollectionKeyType()),
            $this->transformType($target, $type->getCollectionValueType())
        );
    }

    public function getWriteMutator(string $target, string $property): WriteMutator
    {
        $targetMutator = new WriteMutator(WriteMutator::TYPE_ARRAY_DIMENSION, $property, false);

        if ($target === \stdClass::class) {
            $targetMutator = new WriteMutator(WriteMutator::TYPE_PROPERTY, $property, false);
        }

        return $targetMutator;
    }

    public function getReverseExtractor(): PropertiesMappingExtractorInterface
    {
        return new FromTargetPropertiesMappingExtractor($this->propertyInfoExtractor, $this->accessorExtractor, $this->transformerFactory);
    }
}
