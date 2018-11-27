<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\AutoMapperInterface;
use Jane\AutoMapper\MapperConfigurationInterface;
use Symfony\Component\PropertyInfo\Type;

class ObjectTransformerFactory extends AbstractUniqueTypeTransformerFactory
{
    private $autoMapper;

    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    protected function createTransformer(Type $sourceType, Type $targetType, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        // Only deal with source type being an object or an array that is not a collection
        if (!$this->isObjectType($sourceType) || !$this->isObjectType($targetType)) {
            return null;
        }

        $sourceTypeName = 'array';
        $targetTypeName = 'array';

        if ($sourceType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
            $sourceTypeName = $sourceType->getClassName();
        }

        if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
            $targetTypeName = $targetType->getClassName();
        }

        if ($this->autoMapper->hasMapper($sourceTypeName, $targetTypeName)) {
            return new ObjectTransformer($sourceType, $targetType);
        }

        return null;
    }

    private function isObjectType(Type $type): bool
    {
        return
            $type->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT
            ||
            ($type->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY && !$type->isCollection())
        ;
    }
}
