<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Symfony\Component\PropertyInfo\Type;

class NullableTransformerFactory implements TransformerFactoryInterface
{
    private $chainTransformerFactory;

    public function __construct(ChainTransformerFactory $chainTransformerFactory)
    {
        $this->chainTransformerFactory = $chainTransformerFactory;
    }

    public function getTransformer(?array $sourcesTypes, ?array $targetTypes): ?TransformerInterface
    {
        $nbSourcesTypes = \count($sourcesTypes);

        if (null === $sourcesTypes || $nbSourcesTypes === 0 || $nbSourcesTypes > 1) {
            return null;
        }

        /** @var Type $propertyType */
        $propertyType = $sourcesTypes[0];

        if (!$propertyType->isNullable()) {
            return null;
        }

        $isTargetNullable = false;

        foreach ($targetTypes as $targetType) {
            if ($targetType->isNullable()) {
                $isTargetNullable = true;

                break;
            }
        }

        // Remove nullable property here to avoid infinite loop
        return new NullableTransformer($this->chainTransformerFactory->getTransformer([new Type(
            $propertyType->getBuiltinType(),
            false,
            $propertyType->getClassName(),
            $propertyType->isCollection(),
            $propertyType->getCollectionKeyType(),
            $propertyType->getCollectionValueType()
        )], $targetTypes), $isTargetNullable);
    }
}
