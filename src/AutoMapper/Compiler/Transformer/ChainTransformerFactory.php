<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\MapperConfigurationInterface;
use Symfony\Component\PropertyInfo\Type;

class ChainTransformerFactory implements TransformerFactoryInterface
{
    /** @var TransformerFactoryInterface[] */
    private $factories = [];

    public function addTransformerFactory(TransformerFactoryInterface $transformerFactory)
    {
        $this->factories[] = $transformerFactory;
    }

    /**
     * @param Type[] $sourcesTypes
     * @param Type[] $targetTypes
     */
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        foreach ($this->factories as $factory) {
            $transformer = $factory->getTransformer($sourcesTypes, $targetTypes, $mapperConfiguration);

            if ($transformer !== null) {
                return $transformer;
            }
        }

        return null;
    }
}
