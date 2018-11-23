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
        $nbSourcesTypes = \count($sourcesTypes);

        if (null === $sourcesTypes || $nbSourcesTypes === 0 || $nbSourcesTypes > 1) {
            return null;
        }

        /** @var Type $propertyType */
        $propertyType = $sourcesTypes[0];

        if ($propertyType->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY && $propertyType->isCollection()) {
            $targetType = $this->getTargetType($propertyType, $targetTypes);

            if (null !== $targetType) {
                $subItemTransformer = $this->chainTransformerFactory->getTransformer([$propertyType->getCollectionValueType()], [$targetType->getCollectionValueType()]);

                if ($subItemTransformer !== null) {
                    return new ArrayTransformer($subItemTransformer);
                }
            }
        }

        return null;
    }
}
