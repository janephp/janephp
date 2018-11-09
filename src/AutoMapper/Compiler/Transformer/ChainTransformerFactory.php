<?php

namespace Jane\AutoMapper\Compiler\Transformer;

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
     *
     * @return null|TransformerInterface
     */
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes): ?TransformerInterface
    {
        foreach ($this->factories as $factory) {
            $transformer = $factory->getTransformer($sourcesTypes, $targetTypes);

            if ($transformer !== null) {
                return $transformer;
            }
        }

        return null;
    }
}
