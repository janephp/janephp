<?php

declare(strict_types=1);

namespace Jane\Component\AutoMapper\Extractor;

use Jane\Component\AutoMapper\Attribute\MapToContext;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyReadInfo;
use Symfony\Component\PropertyInfo\PropertyReadInfoExtractorInterface;

final class MapToContextReadInfoExtractorDecorator implements PropertyReadInfoExtractorInterface
{
    private $decorated;

    public function __construct(PropertyReadInfoExtractorInterface $decorated)
    {
        $this->decorated = $decorated;
    }

    public function getReadInfo(string $class, string $property, array $context = []): ?PropertyReadInfo
    {
        $readInfo = $this->decorated->getReadInfo($class, $property, $context);

        if (null === $readInfo) {
            return null;
        }

        if ($readInfo->getType() === PropertyReadInfo::TYPE_PROPERTY && PropertyReadInfo::VISIBILITY_PUBLIC !== $readInfo->getVisibility()) {
            $reflClass = new \ReflectionClass($class);
            $camelProp = $this->camelize($property);

            // if we have not found a getter, it might be because it has parameters with MapToContext attribute
            foreach (ReflectionExtractor::$defaultAccessorPrefixes as $prefix) {
                $methodName = $prefix . $camelProp;

                if (
                    $reflClass->hasMethod($methodName)
                    && $reflClass->getMethod($methodName)->getModifiers() === \ReflectionMethod::IS_PUBLIC
                    && $reflClass->getMethod($methodName)->getNumberOfRequiredParameters()
                    && $this->allParametersHaveMapToContextAttribute($reflClass->getMethod($methodName))
                ) {
                    $method = $reflClass->getMethod($methodName);

                    return new PropertyReadInfo(PropertyReadInfo::TYPE_METHOD, $methodName, PropertyReadInfo::VISIBILITY_PUBLIC, $method->isStatic(), false);
                }
            }
        }

        return $readInfo;
    }

    private function camelize(string $string): string
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
    }

    private function allParametersHaveMapToContextAttribute(\ReflectionMethod $method): bool
    {
        foreach ($method->getParameters() as $parameter) {
            if (!$parameter->getAttributes(MapToContext::class)) {
                return false;
            }
        }

        return true;
    }
}
