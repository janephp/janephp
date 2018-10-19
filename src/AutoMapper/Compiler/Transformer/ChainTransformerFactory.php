<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Symfony\Component\PropertyInfo\Type;

class ChainTransformerFactory implements TransformerFactoryInterface
{
    /** @var TransformerFactoryInterface[][] */
    private $factories = [];

    public function addTransformerFactory(TransformerFactoryInterface $transformerFactory, int $priority = 0)
    {
        if (!isset($this->factories[$priority])) {
            $this->factories[$priority] = [];
        }

        $this->factories[$priority][] = $transformerFactory;

        ksort($this->factories);
    }

    /**
     * @param Type[] $sourcesTypes
     * @param Type[] $targetTypes
     *
     * @return null|TransformerInterface
     */
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes): ?TransformerInterface
    {
        foreach ($this->factories as $priority => $factories) {
            foreach ($factories as $factory) {
                $transformer = $factory->getTransformer($sourcesTypes, $targetTypes);

                if ($transformer !== null) {
                    return $transformer;
                }
            }
        }

        return null;
    }
}
