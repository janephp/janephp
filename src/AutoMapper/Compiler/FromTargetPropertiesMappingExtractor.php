<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Compiler\Accessor\AccessorExtractorInterface;
use Jane\AutoMapper\Compiler\Accessor\ReadAccessor;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactoryInterface;
use Jane\AutoMapper\MapperConfigurationInterface;
use SebastianBergmann\GlobalState\RuntimeException;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;
use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\AdvancedNameConverterInterface;

class FromTargetPropertiesMappingExtractor extends PropertiesMappingExtractor
{
    private $nameConverter;

    public function __construct(PropertyInfoExtractorInterface $propertyInfoExtractor, AccessorExtractorInterface $accessorExtractor, TransformerFactoryInterface $transformerFactory, ClassMetadataFactoryInterface $classMetadataFactory = null, AdvancedNameConverterInterface $nameConverter = null)
    {
        parent::__construct($propertyInfoExtractor, $accessorExtractor, $transformerFactory, $classMetadataFactory);

        $this->nameConverter = $nameConverter;
    }

    public function getPropertiesMapping(string $source, string $target, MapperConfigurationInterface $mapperConfiguration): array
    {
        $targetProperties = array_unique($this->propertyInfoExtractor->getProperties($target));

        if (!\in_array($source, ['array', \stdClass::class])) {
            throw new RuntimeException('Only array or stdClass are accepted as a source');
        }

        if (null === $targetProperties) {
            return [];
        }

        $mapping = [];

        foreach ($targetProperties as $property) {
            if (!$this->propertyInfoExtractor->isWritable($target, $property)) {
                continue;
            }

            $targetTypes = $this->propertyInfoExtractor->getTypes($target, $property);

            if ($targetTypes === null) {
                continue;
            }

            $sourceTypes = [];

            foreach ($targetTypes as $type) {
                $sourceTypes[] = $this->transformType($source, $type);
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
                true,
                $this->getGroups($source, $property),
                $this->getGroups($target, $property),
                $this->getMaxDepth($target, $property)
            );
        }

        return $mapping;
    }

    public function getReadAccessor(string $source, string $target, string $property): ?ReadAccessor
    {
        if (null !== $this->nameConverter) {
            $property = $this->nameConverter->normalize($property, $target, $source);
        }

        $sourceAccessor = new ReadAccessor(ReadAccessor::TYPE_ARRAY_DIMENSION, $property);

        if ($source === \stdClass::class) {
            $sourceAccessor = new ReadAccessor(ReadAccessor::TYPE_PROPERTY, $property);
        }

        return $sourceAccessor;
    }

    private function transformType(string $source, Type $type = null): ?Type
    {
        if ($type === null) {
            return null;
        }

        $builtinType = $type->getBuiltinType();
        $className = $type->getClassName();

        if ($type->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT && $type->getClassName() !== \stdClass::class) {
            $builtinType = $source === 'array' ? Type::BUILTIN_TYPE_ARRAY : Type::BUILTIN_TYPE_OBJECT;
            $className = $source === 'array' ? null : \stdClass::class;
        }

        if ($type->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT && ($type->getClassName() === \DateTimeInterface::class || is_subclass_of($type->getClassName(), \DateTimeInterface::class))) {
            $builtinType = 'string';
        }

        return new Type(
            $builtinType,
            $type->isNullable(),
            $className,
            $type->isCollection(),
            $this->transformType($source, $type->getCollectionKeyType()),
            $this->transformType($source, $type->getCollectionValueType())
        );
    }
}
