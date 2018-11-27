<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\MapperConfigurationInterface;

class UniqueTypeTransformerFactory implements TransformerFactoryInterface
{
    private $chainTransformerFactory;

    public function __construct(ChainTransformerFactory $chainTransformerFactory)
    {
        $this->chainTransformerFactory = $chainTransformerFactory;
    }

    public function getTransformer(?array $sourcesTypes, ?array $targetTypes, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        $nbSourcesTypes = $sourcesTypes ? \count($sourcesTypes) : 0;
        $nbTargetsTypes = $targetTypes ? \count($targetTypes) : 0;

        if (null === $sourcesTypes || $nbSourcesTypes === 0 || $nbSourcesTypes > 1) {
            return null;
        }

        if (null === $targetTypes || $nbTargetsTypes <= 1) {
            return null;
        }

        foreach ($targetTypes as $targetType) {
            $transformer = $this->chainTransformerFactory->getTransformer($sourcesTypes, [$targetType], $mapperConfiguration);

            if ($transformer !== null) {
                return $transformer;
            }
        }

        return null;
    }
}
