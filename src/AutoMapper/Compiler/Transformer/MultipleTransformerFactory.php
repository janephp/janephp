<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\MapperConfigurationInterface;
use Symfony\Component\PropertyInfo\Type;

class MultipleTransformerFactory implements TransformerFactoryInterface
{
    private $chainTransformerFactory;

    public function __construct(ChainTransformerFactory $chainTransformerFactory)
    {
        $this->chainTransformerFactory = $chainTransformerFactory;
    }

    /**
     * @param Type[] $sourcesTypes
     * @param Type[] $targetTypes
     *
     * @return null|TransformerInterface
     */
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        if (null === $sourcesTypes || \count($sourcesTypes) === 0) {
            return null;
        }

        if (\count($sourcesTypes) > 1) {
            $transformer = new MultipleTransformer();

            foreach ($sourcesTypes as $sourceType) {
                $transformer->addTransformer($this->chainTransformerFactory->getTransformer([$sourceType], $targetTypes, $mapperConfiguration), $sourceType);
            }

            return $transformer;
        }

        return null;
    }
}
