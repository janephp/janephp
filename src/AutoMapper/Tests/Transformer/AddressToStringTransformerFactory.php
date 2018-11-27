<?php

namespace Jane\AutoMapper\Tests\Transformer;

use Jane\AutoMapper\Compiler\Transformer\TransformerFactoryInterface;
use Jane\AutoMapper\Compiler\Transformer\TransformerInterface;
use Jane\AutoMapper\MapperConfigurationInterface;
use Jane\AutoMapper\Tests\Domain\Address;
use Symfony\Component\PropertyInfo\Type;

class AddressToStringTransformerFactory implements TransformerFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getTransformer(?array $sourcesTypes, ?array $targetTypes, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        if (null === $sourcesTypes || null === $targetTypes || \count($sourcesTypes) === 0 || \count($targetTypes) === 0) {
            return null;
        }

        $findSourceType = null;
        $findTargetType = null;

        /* @var Type $sourcesType */
        foreach ($sourcesTypes as $sourceType) {
            if ($sourceType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT && $sourceType->getClassName() === Address::class) {
                $findSourceType = $sourceType;

                break;
            }
        }

        if ($findSourceType === null) {
            return null;
        }

        /* @var Type $sourcesType */
        foreach ($targetTypes as $targetType) {
            if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_STRING) {
                $findTargetType = $targetType;

                break;
            }
        }

        if ($findTargetType === null) {
            return null;
        }

        return new AddressToStringTransformer();
    }
}
