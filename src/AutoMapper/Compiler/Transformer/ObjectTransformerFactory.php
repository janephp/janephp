<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Symfony\Component\PropertyInfo\Type;

class ObjectTransformerFactory implements TransformerFactoryInterface
{
    use TargetTypeTrait;

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

        if ($propertyType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
            $targetType = $this->getTargetType($propertyType, $targetTypes);

            if (null !== $targetType) {
                return new ObjectTransformer($targetType);
            }
        }

        return null;
    }
}
