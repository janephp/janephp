<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\AccessorExtractorInterface;
use Jane\AutoMapper\Compiler\Accessor\WriteMutator;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactoryInterface;
use Jane\AutoMapper\MapperConfigurationInterface;
use SebastianBergmann\GlobalState\RuntimeException;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;
use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\AdvancedNameConverterInterface;

class FromSourcePropertiesMappingExtractor extends PropertiesMappingExtractor
{
    private $nameConverter;

    public function __construct(PropertyInfoExtractorInterface $propertyInfoExtractor, AccessorExtractorInterface $accessorExtractor, TransformerFactoryInterface $transformerFactory, ClassMetadataFactoryInterface $classMetadataFactory = null, AdvancedNameConverterInterface $nameConverter = null)
    {
        parent::__construct($propertyInfoExtractor, $accessorExtractor, $transformerFactory, $classMetadataFactory);

        $this->nameConverter = $nameConverter;
    }

    public function getPropertiesMapping(string $source, string $target, MapperConfigurationInterface $mapperConfiguration): array
    {
        $sourceProperties = $this->propertyInfoExtractor->getProperties($source);

        if (!\in_array($target, ['array', \stdClass::class])) {
            throw new RuntimeException('Only array or stdClass are accepted as a target');
        }

        if (null === $sourceProperties) {
            return [];
        }

        $sourceProperties = array_unique($sourceProperties);
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

            $transformer = $this->transformerFactory->getTransformer($sourceTypes, $targetTypes, $mapperConfiguration);

            if (null === $transformer) {
                continue;
            }

            $mapping[] = new PropertyMapping(
                $this->getReadAccessor($source, $target, $property),
                $this->getWriteMutator($source, $target, $property),
                $transformer,
                $property,
                false,
                $this->getGroups($source, $property),
                $this->getGroups($target, $property),
                $this->getMaxDepth($source, $property)
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

        // Use string for datetime
        if ($type->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT && ($type->getClassName() === \DateTimeInterface::class || is_subclass_of($type->getClassName(), \DateTimeInterface::class))) {
            $builtinType = 'string';
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

    public function getWriteMutator(string $source, string $target, string $property): WriteMutator
    {
        if ($this->nameConverter !== null) {
            $property = $this->nameConverter->normalize($property, $source, $target);
        }

        $targetMutator = new WriteMutator(WriteMutator::TYPE_ARRAY_DIMENSION, $property, false);

        if ($target === \stdClass::class) {
            $targetMutator = new WriteMutator(WriteMutator::TYPE_PROPERTY, $property, false);
        }

        return $targetMutator;
    }
}
