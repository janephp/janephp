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
 * Mapping extracted only from source, useful when not having metadata on the target for dynamic data like array, \stdClass, ...
 *
 * Can use a NameConverter to use specific properties name in the target
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class FromSourceMappingExtractor extends MappingExtractor
{
    private const ALLOWED_TARGETS = ['array', \stdClass::class];

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
        $sourceProperties = $this->propertyInfoExtractor->getProperties($mapperMetadata->getSource());

        if (!\in_array($mapperMetadata->getTarget(), self::ALLOWED_TARGETS, true)) {
            throw new InvalidMappingException('Only array or stdClass are accepted as a target');
        }

        if (null === $sourceProperties) {
            return [];
        }

        $sourceProperties = array_unique($sourceProperties);
        $mapping = [];

        foreach ($sourceProperties as $property) {
            if (!$this->propertyInfoExtractor->isReadable($mapperMetadata->getSource(), $property)) {
                continue;
            }

            $sourceTypes = $this->propertyInfoExtractor->getTypes($mapperMetadata->getSource(), $property);

            if (null === $sourceTypes) {
                $sourceTypes = [new Type(Type::BUILTIN_TYPE_NULL)]; // if no types found, we force a null type
            }

            $targetTypes = [];

            foreach ($sourceTypes as $type) {
                $targetTypes[] = $this->transformType($mapperMetadata->getTarget(), $type);
            }

            $transformer = $this->transformerFactory->getTransformer($sourceTypes, $targetTypes, $mapperMetadata);

            if (null === $transformer) {
                continue;
            }

            $mapping[] = new PropertyMapping(
                $this->getReadAccessor($mapperMetadata->getSource(), $mapperMetadata->getTarget(), $property),
                $this->getWriteMutator($mapperMetadata->getSource(), $mapperMetadata->getTarget(), $property),
                null,
                $transformer,
                $property,
                false,
                $this->getGroups($mapperMetadata->getSource(), $property),
                $this->getGroups($mapperMetadata->getTarget(), $property),
                $this->getMaxDepth($mapperMetadata->getSource(), $property)
            );
        }

        return $mapping;
    }

    private function transformType(string $target, Type $type = null): ?Type
    {
        if (null === $type) {
            return null;
        }

        $builtinType = $type->getBuiltinType();
        $className = $type->getClassName();

        if (Type::BUILTIN_TYPE_OBJECT === $type->getBuiltinType() && \stdClass::class !== $type->getClassName()) {
            $builtinType = 'array' === $target ? Type::BUILTIN_TYPE_ARRAY : Type::BUILTIN_TYPE_OBJECT;
            $className = 'array' === $target ? null : \stdClass::class;
        }

        // Use string for datetime
        if (Type::BUILTIN_TYPE_OBJECT === $type->getBuiltinType() && (\DateTimeInterface::class === $type->getClassName() || is_subclass_of($type->getClassName(), \DateTimeInterface::class))) {
            $builtinType = 'string';
        }

        return new Type(
            $builtinType,
            $type->isNullable(),
            $className,
            $type->isCollection(),
            $this->transformType($target, $type->getCollectionKeyTypes()),
            $this->transformType($target, $type->getCollectionValueTypes())
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteMutator(string $source, string $target, string $property, array $context = []): WriteMutator
    {
        if (null !== $this->nameConverter) {
            $property = $this->nameConverter->normalize($property, $source, $target);
        }

        $targetMutator = new WriteMutator(WriteMutator::TYPE_ARRAY_DIMENSION, $property, false);

        if (\stdClass::class === $target) {
            $targetMutator = new WriteMutator(WriteMutator::TYPE_PROPERTY, $property, false);
        }

        return $targetMutator;
    }
}
