<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\MapperMetadataInterface;

/**
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class ChainTransformerFactory implements TransformerFactoryInterface
{
    /** @var TransformerFactoryInterface[] */
    private $factories = [];

    /** @var TransformerFactoryInterface[]|null */
    private $sorted = null;

    public function addTransformerFactory(TransformerFactoryInterface $transformerFactory): void
    {
        $this->sorted = null;
        $this->factories[$transformerFactory->getPriority()] = $transformerFactory;
    }

    public function hasTransformerFactory(TransformerFactoryInterface $transformerFactory): bool
    {
        $transformerFactoryClass = \get_class($transformerFactory);
        foreach ($this->factories as $factory) {
            if (is_a($factory, $transformerFactoryClass)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes, MapperMetadataInterface $mapperMetadata): ?TransformerInterface
    {
        if (null === $this->sorted) {
            $this->sorted = $this->factories;
            krsort($this->sorted);
        }

        foreach ($this->sorted as $factory) {
            $transformer = $factory->getTransformer($sourcesTypes, $targetTypes, $mapperMetadata);

            if (null !== $transformer) {
                return $transformer;
            }
        }

        return null;
    }

    public function getPriority(): int
    {
        return 0;
    }
}
