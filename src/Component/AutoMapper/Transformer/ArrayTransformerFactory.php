<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\MapperMetadataInterface;
use Symfony\Component\PropertyInfo\Type;

/**
 * Create a decorated transformer to handle array type.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class ArrayTransformerFactory extends AbstractUniqueTypeTransformerFactory implements PrioritizedTransformerFactoryInterface
{
    private $chainTransformerFactory;

    public function __construct(ChainTransformerFactory $chainTransformerFactory)
    {
        $this->chainTransformerFactory = $chainTransformerFactory;
    }

    /**
     * {@inheritdoc}
     */
    protected function createTransformer(Type $sourceType, Type $targetType, MapperMetadataInterface $mapperMetadata): ?TransformerInterface
    {
        if (!$sourceType->isCollection()) {
            return null;
        }

        if (!$targetType->isCollection()) {
            return null;
        }

        if (null === $sourceType->getCollectionValueType() || null === $targetType->getCollectionValueType()) {
            return new CopyTransformer();
        }

        $subItemTransformer = $this->chainTransformerFactory->getTransformer([$sourceType->getCollectionValueType()], [$targetType->getCollectionValueType()], $mapperMetadata);

        if (null !== $subItemTransformer) {
            if (Type::BUILTIN_TYPE_INT !== $sourceType->getCollectionKeyType()->getBuiltinType()) {
                return new DictionaryTransformer($subItemTransformer);
            }

            return new ArrayTransformer($subItemTransformer);
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority(): int
    {
        return 4;
    }
}
