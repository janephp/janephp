<?php

namespace Jane\Component\AutoMapper\Transformer;

use Jane\Component\AutoMapper\MapperMetadataInterface;
use Symfony\Component\PropertyInfo\Type;

/**
 * @author Baptiste Leduc <baptiste.leduc@gmail.com>
 */
final class EnumTransformerFactory extends AbstractUniqueTypeTransformerFactory implements PrioritizedTransformerFactoryInterface
{
    protected function createTransformer(Type $sourceType, Type $targetType, MapperMetadataInterface $mapperMetadata): ?TransformerInterface
    {
        // source is enum, target isn't
        if ($this->isEnumType($sourceType, true) && !$this->isEnumType($targetType)) {
            return new SourceEnumTransformer();
        }

        // target is enum, source isn't
        if (!$this->isEnumType($sourceType) && $this->isEnumType($targetType, true)) {
            return new TargetEnumTransformer($targetType->getClassName());
        }

        // both source & target are enums
        if ($this->isEnumType($sourceType) && $this->isEnumType($targetType)) {
            return new CopyEnumTransformer();
        }

        return null;
    }

    private function isEnumType(Type $type, bool $backed = false): bool
    {
        if (Type::BUILTIN_TYPE_OBJECT !== $type->getBuiltinType()) {
            return false;
        }

        if (!is_subclass_of($type->getClassName(), \UnitEnum::class)) {
            return false;
        }

        if ($backed && !is_subclass_of($type->getClassName(), \BackedEnum::class)) {
            return false;
        }

        return true;
    }

    public function getPriority(): int
    {
        return 3;
    }
}
