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

        if ([] === $sourceType->getCollectionValueTypes() || [] === $targetType->getCollectionValueTypes()) {
            return new CopyTransformer();
        }

        $subItemTransformer = $this->chainTransformerFactory->getTransformer($sourceType->getCollectionValueTypes(), $targetType->getCollectionValueTypes(), $mapperMetadata);

        if (null !== $subItemTransformer) {
            $sourceCollectionKeyTypes = $sourceType->getCollectionKeyTypes();
            $sourceCollectionKeyType = $sourceCollectionKeyTypes[0] ?? null;

            if ($sourceCollectionKeyType instanceof Type && Type::BUILTIN_TYPE_INT !== $sourceCollectionKeyType->getBuiltinType()) {
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
