<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\MapperMetadataInterface;

/**
 * Reduce array of type to only one type on source and target.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class UniqueTypeTransformerFactory implements TransformerFactoryInterface, PrioritizedTransformerFactoryInterface
{
    private $chainTransformerFactory;

    public function __construct(ChainTransformerFactory $chainTransformerFactory)
    {
        $this->chainTransformerFactory = $chainTransformerFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function getTransformer(?array $sourceTypes, ?array $targetTypes, MapperMetadataInterface $mapperMetadata): ?TransformerInterface
    {
        $nbSourceTypes = $sourceTypes ? \count($sourceTypes) : 0;
        $nbTargetTypes = $targetTypes ? \count($targetTypes) : 0;

        if (null === $sourceTypes || 0 === $nbSourceTypes || $nbSourceTypes > 1) {
            return null;
        }

        if (null === $targetTypes || $nbTargetTypes <= 1) {
            return null;
        }

        foreach ($targetTypes as $targetType) {
            if (null === $targetType) {
                continue;
            }

            $transformer = $this->chainTransformerFactory->getTransformer($sourceTypes, [$targetType], $mapperMetadata);

            if (null !== $transformer) {
                return $transformer;
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority(): int
    {
        return 32;
    }
}
