<?php

namespace Jane\AutoMapper\Compiler\Transformer;

use Jane\AutoMapper\MapperConfigurationInterface;
use Symfony\Component\PropertyInfo\Type;

class DateTimeTransformerFactory extends AbstractUniqueTypeTransformerFactory
{
    protected function createTransformer(Type $sourceType, Type $targetType, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        $isSourceDate = $this->isDateTimeType($sourceType);
        $isTargetDate = $this->isDateTimeType($targetType);

        if ($isSourceDate && $isTargetDate) {
            return $this->createTransformerForSourceAndTarget($sourceType, $targetType);
        }

        if ($isSourceDate) {
            return $this->createTransformerForSource($targetType, $mapperConfiguration);
        }

        if ($isTargetDate) {
            return $this->createTransformerForTarget($sourceType, $targetType, $mapperConfiguration);
        }

        return null;
    }

    protected function createTransformerForSourceAndTarget(Type $sourceType, Type $targetType): ?TransformerInterface
    {
        $isSourceMutable = $this->isDateTimeMutable($sourceType);
        $isTargetMutable = $this->isDateTimeMutable($targetType);

        if ($isSourceMutable === $isTargetMutable) {
            return new CopyTransformer();
        }

        // Source is mutable but target is not, transform into a datetime immutable type @TODO
        if ($isSourceMutable) {
            return new CopyTransformer();
        }

        // Target is mutable but source is not, transform into a datetime mutable type @TODO
        return new CopyTransformer();
    }

    protected function createTransformerForSource(Type $targetType, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        if ($targetType->getBuiltinType() === Type::BUILTIN_TYPE_STRING) {
            return new DateTimeToStringTansformer($mapperConfiguration->getDateTimeFormat());
        }

        return null;
    }

    protected function createTransformerForTarget(Type $sourceType, Type $targetType, MapperConfigurationInterface $mapperConfiguration): ?TransformerInterface
    {
        if ($sourceType->getBuiltinType() === Type::BUILTIN_TYPE_STRING) {
            return new StringToDateTimeTransformer($this->getClassName($targetType), $mapperConfiguration->getDateTimeFormat());
        }

        return null;
    }

    private function isDateTimeType(Type $type): bool
    {
        if ($type->getBuiltinType() !== Type::BUILTIN_TYPE_OBJECT) {
            return false;
        }

        if ($type->getClassName() !== \DateTimeInterface::class && !is_subclass_of($type->getClassName(), \DateTimeInterface::class)) {
            return false;
        }

        return true;
    }

    private function getClassName(Type $type): ?string
    {
        if ($type->getClassName() !== \DateTimeInterface::class) {
            return \DateTimeImmutable::class;
        }

        return $type->getClassName();
    }

    private function isDateTimeMutable(Type $type): bool
    {
        if ($type->getBuiltinType() !== Type::BUILTIN_TYPE_OBJECT) {
            return false;
        }

        if ($type->getClassName() !== \DateTime::class && !is_subclass_of($type->getClassName(), \DateTime::class)) {
            return false;
        }

        return true;
    }
}
