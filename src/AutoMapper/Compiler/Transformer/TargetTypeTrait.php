<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Symfony\Component\PropertyInfo\Type;

trait TargetTypeTrait
{
    protected function getTargetType(Type $sourceType, array $targetTypes = []): ?Type
    {
        if ($sourceType->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY) {
            foreach ($targetTypes as $targetType) {
                if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY) {
                    return $targetType;
                }

                if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
                    return $targetType;
                }
            }

            return null;
        }

        if ($sourceType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
            foreach ($targetTypes as $targetType) {
                if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_OBJECT) {
                    return $targetType;
                }

                if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_ARRAY) {
                    return $targetType;
                }
            }

            return null;
        }

        return null;
    }
}
