<?php

namespace Jane\AutoMapper\Transformer;

use Jane\AutoMapper\MapperMetadataInterface;
use Symfony\Component\PropertyInfo\Type;

/**
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class NullableTransformerFactory implements TransformerFactoryInterface
{
    private $chainTransformerFactory;

    public function __construct(ChainTransformerFactory $chainTransformerFactory)
    {
        $this->chainTransformerFactory = $chainTransformerFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes, MapperMetadataInterface $mapperMetadata): ?TransformerInterface
    {
        $nbSourcesTypes = $sourcesTypes ? \count($sourcesTypes) : 0;

        if (null === $sourcesTypes || 0 === $nbSourcesTypes || $nbSourcesTypes > 1) {
            return null;
        }

        $propertyType = $sourcesTypes[0];

        if (!$propertyType->isNullable()) {
            return null;
        }

        $isTargetNullable = false;

        foreach ($targetTypes as $targetType) {
            if ($targetType->isNullable()) {
                $isTargetNullable = true;

                break;
            }
        }

        $subTransformer = $this->chainTransformerFactory->getTransformer([new Type(
            $propertyType->getBuiltinType(),
            false,
            $propertyType->getClassName(),
            $propertyType->isCollection(),
            $propertyType->getCollectionKeyType(),
            $propertyType->getCollectionValueType()
        )], $targetTypes, $mapperMetadata);

        if (null === $subTransformer) {
            return null;
        }

        // Remove nullable property here to avoid infinite loop
        return new NullableTransformer($subTransformer, $isTargetNullable);
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority(): int
    {
        return 64;
    }
}
