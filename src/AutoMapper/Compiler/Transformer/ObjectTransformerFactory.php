<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\AutoMapperInterface;
use Jane\AutoMapper\AutoMapperRegisterInterface;
use Jane\AutoMapper\MapperConfigurationFactory;
use Symfony\Component\PropertyInfo\Type;

class ObjectTransformerFactory implements TransformerFactoryInterface
{
    use TargetTypeTrait;

    private $autoMapper;

    private $autoCreateSubMapper;

    private $mapperConfigurationFactory;

    public function __construct(AutoMapperInterface $autoMapper, MapperConfigurationFactory $mapperConfigurationFactory = null, $autoCreateSubMapper = true)
    {
        $this->autoMapper = $autoMapper;
        $this->autoCreateSubMapper = $autoCreateSubMapper;
        $this->mapperConfigurationFactory = $mapperConfigurationFactory;
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
                    return new ObjectTransformer($targetType);
                }

                if ($this->autoCreateSubMapper && $this->autoMapper instanceof AutoMapperRegisterInterface && $this->mapperConfigurationFactory !== null) {
                    $this->autoMapper->register($this->mapperConfigurationFactory->create($sourceTypeName, $targetTypeName));

                    return new ObjectTransformer($targetType);
                }

                return null;
            }
        }

        return null;
    }
}
