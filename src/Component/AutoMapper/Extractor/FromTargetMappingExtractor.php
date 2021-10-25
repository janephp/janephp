<?php

namespace Jane\Component\AutoMapper\Extractor;

use Jane\Component\AutoMapper\Exception\InvalidMappingException;
use Jane\Component\AutoMapper\MapperMetadataInterface;
use Jane\Component\AutoMapper\Transformer\TransformerFactoryInterface;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyReadInfoExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyWriteInfoExtractorInterface;
use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;
use Symfony\Component\Serializer\NameConverter\AdvancedNameConverterInterface;

/**
 * Mapping extracted only from target, useful when not having metadata on the source for dynamic data like array, \stdClass, ...
 *
 * Can use a NameConverter to use specific properties name in the source
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class FromTargetMappingExtractor extends MappingExtractor
{
    private const ALLOWED_SOURCES = ['array', \stdClass::class];

    private $nameConverter;

    public function __construct(PropertyInfoExtractorInterface $propertyInfoExtractor, PropertyReadInfoExtractorInterface $readInfoExtractor, PropertyWriteInfoExtractorInterface $writeInfoExtractor, TransformerFactoryInterface $transformerFactory, ClassMetadataFactoryInterface $classMetadataFactory = null, AdvancedNameConverterInterface $nameConverter = null)
    {
        parent::__construct($propertyInfoExtractor, $readInfoExtractor, $writeInfoExtractor, $transformerFactory, $classMetadataFactory);

        $this->nameConverter = $nameConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function getPropertiesMapping(MapperMetadataInterface $mapperMetadata): array
    {
        $targetProperties = array_unique($this->propertyInfoExtractor->getProperties($mapperMetadata->getTarget()) ?? []);

        if (!\in_array($mapperMetadata->getSource(), self::ALLOWED_SOURCES, true)) {
            throw new InvalidMappingException('Only array or stdClass are accepted as a source');
        }

        if (null === $targetProperties) {
            return [];
        }

        $mapping = [];

        foreach ($targetProperties as $property) {
            if (!$this->propertyInfoExtractor->isWritable($mapperMetadata->getTarget(), $property)) {
                continue;
            }

            $targetTypes = $this->propertyInfoExtractor->getTypes($mapperMetadata->getTarget(), $property);

            if (null === $targetTypes) {
                continue;
            }

            $sourceTypes = [];

            foreach ($targetTypes as $type) {
                $sourceTypes[] = $this->transformType($mapperMetadata->getSource(), $type);
            }

            $transformer = $this->transformerFactory->getTransformer($sourceTypes, $targetTypes, $mapperMetadata);

            if (null === $transformer) {
                continue;
            }

            $mapping[] = new PropertyMapping(
                $this->getReadAccessor($mapperMetadata->getSource(), $mapperMetadata->getTarget(), $property),
                $this->getWriteMutator($mapperMetadata->getSource(), $mapperMetadata->getTarget(), $property, [
                    'enable_constructor_extraction' => false,
                ]),
                $this->getWriteMutator($mapperMetadata->getSource(), $mapperMetadata->getTarget(), $property, [
                    'enable_constructor_extraction' => true,
                ]),
                $transformer,
                $property,
                true,
                $this->getGroups($mapperMetadata->getSource(), $property),
                $this->getGroups($mapperMetadata->getTarget(), $property),
                $this->getMaxDepth($mapperMetadata->getTarget(), $property)
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

        if (\stdClass::class === $source) {
            $sourceAccessor = new ReadAccessor(ReadAccessor::TYPE_PROPERTY, $property);
        }

        return $sourceAccessor;
    }

    private function transformType(string $source, Type $type = null): ?Type
    {
        if (null === $type) {
            return null;
        }

        $builtinType = $type->getBuiltinType();
        $className = $type->getClassName();

        if (Type::BUILTIN_TYPE_OBJECT === $type->getBuiltinType() && \stdClass::class !== $type->getClassName()) {
            $builtinType = 'array' === $source ? Type::BUILTIN_TYPE_ARRAY : Type::BUILTIN_TYPE_OBJECT;
            $className = 'array' === $source ? null : \stdClass::class;
        }

        if (Type::BUILTIN_TYPE_OBJECT === $type->getBuiltinType() && (\DateTimeInterface::class === $type->getClassName() || is_subclass_of($type->getClassName(), \DateTimeInterface::class))) {
            $builtinType = 'string';
        }

        return new Type(
            $builtinType,
            $type->isNullable(),
            $className,
            $type->isCollection(),
            $this->transformType($source, $type->getCollectionKeyTypes()),
            $this->transformType($source, $type->getCollectionValueTypes())
        );
    }
}
