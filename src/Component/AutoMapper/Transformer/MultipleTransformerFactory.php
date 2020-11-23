<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\MapperMetadataInterface;

/**
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class MultipleTransformerFactory implements TransformerFactoryInterface, PrioritizedTransformerFactoryInterface
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
        if (null === $sourceTypes || \count($sourceTypes) <= 1) {
            return null;
        }

        $transformers = [];

        foreach ($sourceTypes as $sourceType) {
            $transformer = $this->chainTransformerFactory->getTransformer([$sourceType], $targetTypes, $mapperMetadata);

            if (null !== $transformer) {
                $transformers[] = [
                    'transformer' => $transformer,
                    'type' => $sourceType,
                ];
            }
        }

        if (\count($transformers) > 1) {
            return new MultipleTransformer($transformers);
        }

        if (\count($transformers) === 1) {
            return $transformers[0]['transformer'];
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority(): int
    {
        return 128;
    }
}
