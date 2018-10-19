<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Symfony\Component\PropertyInfo\Type;

class ArrayTransformerFactory implements TransformerFactoryInterface
{
    use TargetTypeTrait;

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
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes): ?TransformerInterface
    {
        if (null === $sourcesTypes || \count($sourcesTypes) === 0) {
            return null;
        }

        /** @var Type $propertyType */
        $propertyType = $sourcesTypes[0];
        $transformer = null;

        if ($propertyType->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY) {
            $targetType = $this->getTargetType($propertyType, $targetTypes);

            if (null !== $targetType) {
                $subItemTransformer = $this->chainTransformerFactory->getTransformer([$propertyType->getCollectionValueType()], [$targetType->getCollectionValueType()]);

                return new ArrayTransformer($subItemTransformer);
            }
        }

        return null;
    }
}
