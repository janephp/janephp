<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\MapperConfigurationInterface;
use Symfony\Component\PropertyInfo\Type;

abstract class AbstractUniqueTypeTransformerFactory implements TransformerFactoryInterface
{
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        $nbSourcesTypes = $sourcesTypes ? \count($sourcesTypes) : 0;
        $nbTargetsTypes = $targetTypes ? \count($targetTypes) : 0;

        if ($nbSourcesTypes === 0 || $nbSourcesTypes > 1) {
            return null;
        }

        if ($nbTargetsTypes === 0 || $nbTargetsTypes > 1) {
            return null;
        }

        return $this->createTransformer($sourcesTypes[0], $targetTypes[0], $mapperConfiguration);
    }

    abstract protected function createTransformer(Type $sourceType, Type $targetType, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface;
}
