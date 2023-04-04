<?php

namespace Jane\Component\AutoMapper\Extractor;

use Jane\Component\AutoMapper\Transformer\TransformerFactoryInterface;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyReadInfo;
use Symfony\Component\PropertyInfo\PropertyReadInfoExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyWriteInfo;
use Symfony\Component\PropertyInfo\PropertyWriteInfoExtractorInterface;
use Symfony\Component\Serializer\Mapping\AttributeMetadataInterface;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface;

/**
 * @internal
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
abstract class MappingExtractor implements MappingExtractorInterface
{
    protected $propertyInfoExtractor;

    protected $transformerFactory;

    protected $readInfoExtractor;

    protected $writeInfoExtractor;

    protected $classMetadataFactory;

    public function __construct(PropertyInfoExtractorInterface $propertyInfoExtractor, PropertyReadInfoExtractorInterface $readInfoExtractor, PropertyWriteInfoExtractorInterface $writeInfoExtractor, TransformerFactoryInterface $transformerFactory, ClassMetadataFactoryInterface $classMetadataFactory = null)
    {
        $this->propertyInfoExtractor = $propertyInfoExtractor;
        $this->readInfoExtractor = $readInfoExtractor;
        $this->writeInfoExtractor = $writeInfoExtractor;
        $this->transformerFactory = $transformerFactory;
        $this->classMetadataFactory = $classMetadataFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getReadAccessor(string $source, string $target, string $property): ?ReadAccessor
    {
        $readInfo = $this->readInfoExtractor->getReadInfo($source, $property);

        if (null === $readInfo) {
            return null;
        }

        $type = ReadAccessor::TYPE_PROPERTY;

        if (PropertyReadInfo::TYPE_METHOD === $readInfo->getType()) {
            $type = ReadAccessor::TYPE_METHOD;
        }

        return new ReadAccessor(
            $type,
            $readInfo->getName(),
            PropertyReadInfo::VISIBILITY_PUBLIC !== $readInfo->getVisibility()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteMutator(string $source, string $target, string $property, array $context = []): ?WriteMutator
    {
        $writeInfo = $this->writeInfoExtractor->getWriteInfo($target, $property, $context);

        if (null === $writeInfo) {
            return null;
        }

        if (PropertyWriteInfo::TYPE_NONE === $writeInfo->getType()) {
            return null;
        }

        if (PropertyWriteInfo::TYPE_CONSTRUCTOR === $writeInfo->getType()) {
            $parameter = new \ReflectionParameter([$target, '__construct'], $writeInfo->getName());

            return new WriteMutator(WriteMutator::TYPE_CONSTRUCTOR, $writeInfo->getName(), false, $parameter);
        }

        // The reported WriteInfo of readonly promoted properties is incorrectly returned as a writeable property when constructor extraction is disabled.
        // see https://github.com/symfony/symfony/pull/48108
        if (
            ($context['enable_constructor_extraction'] ?? true) === false
            && \PHP_VERSION_ID >= 80100
            && PropertyWriteInfo::TYPE_PROPERTY === $writeInfo->getType()
        ) {
            $reflectionProperty = new \ReflectionProperty($target, $property);

            if ($reflectionProperty->isReadOnly() || $reflectionProperty->isPromoted()) {
                return null;
            }
        }

        $type = WriteMutator::TYPE_PROPERTY;

        if (PropertyWriteInfo::TYPE_METHOD === $writeInfo->getType()) {
            $type = WriteMutator::TYPE_METHOD;
        }

        if (PropertyWriteInfo::TYPE_ADDER_AND_REMOVER === $writeInfo->getType()) {
            $type = WriteMutator::TYPE_ADDER_AND_REMOVER;
            $writeInfo = $writeInfo->getAdderInfo();
        }

        return new WriteMutator(
            $type,
            $writeInfo->getName(),
            PropertyReadInfo::VISIBILITY_PUBLIC !== $writeInfo->getVisibility()
        );
    }

    protected function getMaxDepth($class, $property): ?int
    {
        if ('array' === $class) {
            return null;
        }

        if (null === $this->classMetadataFactory) {
            return null;
        }

        if (!$this->classMetadataFactory->getMetadataFor($class)) {
            return null;
        }

        $serializerClassMetadata = $this->classMetadataFactory->getMetadataFor($class);
        $maxDepth = null;

        foreach ($serializerClassMetadata->getAttributesMetadata() as $serializerAttributeMetadata) {
            if ($serializerAttributeMetadata->getName() === $property) {
                $maxDepth = $serializerAttributeMetadata->getMaxDepth();
            }
        }

        return $maxDepth;
    }

    protected function getGroups($class, $property): ?array
    {
        if ('array' === $class) {
            return null;
        }

        if (null === $this->classMetadataFactory || !$this->classMetadataFactory->getMetadataFor($class)) {
            return null;
        }

        $serializerClassMetadata = $this->classMetadataFactory->getMetadataFor($class);
        $anyGroupFound = false;
        $groups = [];

        foreach ($serializerClassMetadata->getAttributesMetadata() as $serializerAttributeMetadata) {
            $groupsFound = $serializerAttributeMetadata->getGroups();

            if ($groupsFound) {
                $anyGroupFound = true;
            }

            if ($serializerAttributeMetadata->getName() === $property) {
                $groups = $groupsFound;
            }
        }

        if (!$anyGroupFound) {
            return null;
        }

        return $groups;
    }

    protected function isIgnoredProperty($class, $property): bool
    {
        if ('array' === $class || !method_exists(AttributeMetadataInterface::class, 'isIgnored')) {
            return false;
        }

        if (null === $this->classMetadataFactory || !$this->classMetadataFactory->getMetadataFor($class)) {
            return false;
        }

        $serializerClassMetadata = $this->classMetadataFactory->getMetadataFor($class);

        foreach ($serializerClassMetadata->getAttributesMetadata() as $serializerAttributeMetadata) {
            if ($serializerAttributeMetadata->getName() === $property) {
                return $serializerAttributeMetadata->isIgnored();
            }
        }

        return false;
    }
}
