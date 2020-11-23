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

    /**
     * Biggest priority is MultipleTransformerFactory with 128, so default priority will be bigger in order to
     * be used before it, 256 should be enought.
     */
    public function addTransformerFactory(TransformerFactoryInterface $transformerFactory, int $priority = 256): void
    {
        $this->sorted = null;

        if ($transformerFactory instanceof PrioritizedTransformerFactoryInterface) {
            $priority = $transformerFactory->getPriority();
        }

        if (!\array_key_exists($priority, $this->factories)) {
            $this->factories[$priority] = [];
        }
        $this->factories[$priority][] = $transformerFactory;
    }

    public function hasTransformerFactory(TransformerFactoryInterface $transformerFactory): bool
    {
        $this->sortFactories();

        $transformerFactoryClass = \get_class($transformerFactory);
        foreach ($this->sorted as $factory) {
            if (is_a($factory, $transformerFactoryClass)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getTransformer(?array $sourceTypes, ?array $targetTypes, MapperMetadataInterface $mapperMetadata): ?TransformerInterface
    {
        $this->sortFactories();

        foreach ($this->sorted as $factory) {
            $transformer = $factory->getTransformer($sourceTypes, $targetTypes, $mapperMetadata);

            if (null !== $transformer) {
                return $transformer;
            }
        }

        return null;
    }

    private function sortFactories(): void
    {
        if (null === $this->sorted) {
            $this->sorted = [];
            krsort($this->factories);

            foreach ($this->factories as $prioritisedFactories) {
                foreach ($prioritisedFactories as $factory) {
                    $this->sorted[] = $factory;
                }
            }
        }
    }
}
