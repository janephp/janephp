<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\MapperConfigurationInterface;
use Symfony\Component\PropertyInfo\Type;

class ArrayTransformerFactory extends AbstractUniqueTypeTransformerFactory
{
    private $chainTransformerFactory;

    public function __construct(ChainTransformerFactory $chainTransformerFactory)
    {
        $this->chainTransformerFactory = $chainTransformerFactory;
    }

    protected function createTransformer(Type $sourceType, Type $targetType, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        if ($sourceType->getBuiltinType() !== Type::BUILTIN_TYPE_ARRAY || !$sourceType->isCollection()) {
            return null;
        }

        if ($targetType->getBuiltinType() !== Type::BUILTIN_TYPE_ARRAY || !$targetType->isCollection()) {
            return null;
        }

        $subItemTransformer = $this->chainTransformerFactory->getTransformer([$sourceType->getCollectionValueType()], [$targetType->getCollectionValueType()], $mapperConfiguration);

        if ($subItemTransformer !== null) {
            return new ArrayTransformer($subItemTransformer);
        }

        return null;
    }
}
