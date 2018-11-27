<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\AutoMapperInterface;
use Symfony\Component\PropertyInfo\Type;

class ObjectTransformerFactory implements TransformerFactoryInterface
{
    use TargetTypeTrait;

    private $autoMapper;

    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
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

        if (
            $propertyType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT
            ||
            ($propertyType->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY && !$propertyType->isCollection())
        ) {
            $sourceTypeName = 'array';

            if ($propertyType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
                $sourceTypeName = $propertyType->getClassName();
            }

            $targetType = $this->getTargetType($propertyType, $targetTypes);

            if (null !== $targetType) {
                $targetTypeName = 'array';

                if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
                    $targetTypeName = $targetType->getClassName();
                }

                if ($this->autoMapper->hasMapper($sourceTypeName, $targetTypeName)) {
                    return new ObjectTransformer($propertyType, $targetType);
                }

                return null;
            }
        }

        return null;
    }
}
