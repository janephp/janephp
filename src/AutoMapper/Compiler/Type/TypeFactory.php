<?php

namespace Jane\AutoMapper\Compiler\Type;

use Symfony\Component\PropertyInfo\Type as PropertyType;

class TypeFactory
{
    private const BUILTING_MAPPING = [
        PropertyType::BUILTIN_TYPE_BOOL => Type::TYPE_BOOLEAN,
        PropertyType::BUILTIN_TYPE_CALLABLE => Type::TYPE_CALLABLE,
        PropertyType::BUILTIN_TYPE_FLOAT => Type::TYPE_FLOAT,
        PropertyType::BUILTIN_TYPE_INT => Type::TYPE_INTEGER,
        PropertyType::BUILTIN_TYPE_ITERABLE => Type::TYPE_ITERABLE,
        PropertyType::BUILTIN_TYPE_NULL => Type::TYPE_NULL,
        PropertyType::BUILTIN_TYPE_RESOURCE => Type::TYPE_RESOURCE,
        PropertyType::BUILTIN_TYPE_STRING => Type::TYPE_STRING,
    ];

    public function createFromPropertyInfoType(array $types = null): Type
    {
        if (null === $types || \count($types) === 0) {
            return new Type(Type::TYPE_MIXED);
        }

        if (\count($types) > 1) {
            $compilerType = new MultipleType();

            foreach ($types as $type) {
                $compilerType->addType($this->createFromPropertyInfoType([$type]));
            }

            return $compilerType;
        }

        /** @var PropertyType $propertyType */
        $propertyType = $types[0];
        $type = null;

        if (array_key_exists($propertyType->getBuiltinType(), self::BUILTING_MAPPING)) {
            return new Type(self::BUILTING_MAPPING[$propertyType->getBuiltinType()]);
        }

        if ($propertyType->getBuiltinType() === PropertyType::BUILTIN_TYPE_ARRAY) {
            if ($propertyType->getCollectionKeyType() === null || $propertyType->getCollectionKeyType()->getBuiltinType() === PropertyType::BUILTIN_TYPE_INT) {
                return new ArrayType($this->createFromPropertyInfoType([$propertyType->getCollectionValueType()]));
            }

            return new MapType($this->createFromPropertyInfoType([$propertyType->getCollectionValueType()]));
        }

        if ($propertyType->getBuiltinType() === PropertyType::BUILTIN_TYPE_OBJECT) {
            return new ObjectType($propertyType->getClassName());
        }

        return new Type(Type::TYPE_MIXED);
    }
}