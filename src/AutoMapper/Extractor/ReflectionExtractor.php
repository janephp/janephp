<?php

namespace Jane\AutoMapper\Extractor;

use Doctrine\Common\Inflector\Inflector;
use Symfony\Component\PropertyInfo\PropertyAccessExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyListExtractorInterface;
use Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface;
use Symfony\Component\PropertyInfo\Type;

/**
 * Extracts data using the reflection API.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 *
 * @final
 */
class ReflectionExtractor implements PropertyListExtractorInterface, PropertyTypeExtractorInterface, PropertyAccessExtractorInterface
{
    /**
     * @internal
     */
    public static $defaultMutatorPrefixes = ['add', 'remove', 'set'];

    /**
     * @internal
     */
    public static $defaultAccessorPrefixes = ['is', 'can', 'get'];

    /**
     * @internal
     */
    public static $defaultArrayMutatorPrefixes = ['add', 'remove'];

    private $mutatorPrefixes;
    private $accessorPrefixes;
    private $arrayMutatorPrefixes;
    private $allowPrivate;

    public function __construct($allowPrivate = false)
    {
        $this->mutatorPrefixes = self::$defaultMutatorPrefixes;
        $this->accessorPrefixes = self::$defaultAccessorPrefixes;
        $this->arrayMutatorPrefixes = self::$defaultArrayMutatorPrefixes;
        $this->allowPrivate = $allowPrivate;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties($class, array $context = [])
    {
        try {
            $reflectionClass = new \ReflectionClass($class);
        } catch (\ReflectionException $e) {
            return;
        }

        $propertyFlag = $this->allowPrivate ?
            \ReflectionProperty::IS_PRIVATE | \ReflectionProperty::IS_PROTECTED | \ReflectionProperty::IS_PUBLIC
            :
            \ReflectionProperty::IS_PUBLIC
        ;

        $methodFlag = $this->allowPrivate ?
            \ReflectionMethod::IS_PRIVATE | \ReflectionMethod::IS_PROTECTED | \ReflectionMethod::IS_PUBLIC
            :
            \ReflectionMethod::IS_PUBLIC
        ;

        $reflectionProperties = $reflectionClass->getProperties($propertyFlag);

        $properties = [];
        foreach ($reflectionProperties as $reflectionProperty) {
            $properties[$reflectionProperty->name] = $reflectionProperty->name;
        }

        foreach ($reflectionClass->getMethods($methodFlag) as $reflectionMethod) {
            if ($reflectionMethod->isStatic()) {
                continue;
            }

            $propertyName = $this->getPropertyName($reflectionMethod->name, $reflectionProperties);

            if (!$propertyName || isset($properties[$propertyName])) {
                continue;
            }

            if (!$reflectionClass->hasProperty($propertyName) && !preg_match('/^[A-Z]{2,}/', $propertyName)) {
                $propertyName = lcfirst($propertyName);
            }

            $properties[$propertyName] = $propertyName;
        }

        return $properties ? array_values($properties) : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes($class, $property, array $context = [])
    {
        if ($fromMutator = $this->extractFromMutator($class, $property)) {
            return $fromMutator;
        }

        if ($fromAccessor = $this->extractFromAccessor($class, $property)) {
            return $fromAccessor;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable($class, $property, array $context = [])
    {
        $refClass = new \ReflectionClass($class);

        if (!$refClass->hasProperty($property)) {
            return false;
        }

        if ($this->allowPrivate) {
            return true;
        }

        if ($this->isPublicProperty($class, $property)) {
            return true;
        }

        list($reflectionMethod) = $this->getAccessorMethod($class, $property);

        return null !== $reflectionMethod;
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable($class, $property, array $context = [])
    {
        $refClass = new \ReflectionClass($class);

        if (!$refClass->hasProperty($property)) {
            return false;
        }

        if ($this->allowPrivate) {
            return true;
        }

        if ($this->isPublicProperty($class, $property)) {
            return true;
        }

        list($reflectionMethod) = $this->getMutatorMethod($class, $property);

        return null !== $reflectionMethod;
    }

    /**
     * @return Type[]|null
     */
    private function extractFromMutator(string $class, string $property): ?array
    {
        list($reflectionMethod, $prefix) = $this->getMutatorMethod($class, $property);
        if (null === $reflectionMethod) {
            return null;
        }

        $reflectionParameters = $reflectionMethod->getParameters();
        $reflectionParameter = $reflectionParameters[0];

        if (!$reflectionType = $reflectionParameter->getType()) {
            return null;
        }
        $type = $this->extractFromReflectionType($reflectionType);

        if (in_array($prefix, $this->arrayMutatorPrefixes)) {
            $type = new Type(Type::BUILTIN_TYPE_ARRAY, false, null, true, new Type(Type::BUILTIN_TYPE_INT), $type);
        }

        return [$type];
    }

    /**
     * Tries to extract type information from accessors.
     *
     * @return Type[]|null
     */
    private function extractFromAccessor(string $class, string $property): ?array
    {
        list($reflectionMethod, $prefix) = $this->getAccessorMethod($class, $property);
        if (null === $reflectionMethod) {
            return null;
        }

        if ($reflectionType = $reflectionMethod->getReturnType()) {
            return [$this->extractFromReflectionType($reflectionType)];
        }

        if (in_array($prefix, ['is', 'can'])) {
            return [new Type(Type::BUILTIN_TYPE_BOOL)];
        }

        return null;
    }

    private function extractFromReflectionType(\ReflectionType $reflectionType): Type
    {
        $phpTypeOrClass = $reflectionType->getName();
        $nullable = $reflectionType->allowsNull();

        if (Type::BUILTIN_TYPE_ARRAY === $phpTypeOrClass) {
            $type = new Type(Type::BUILTIN_TYPE_ARRAY, $nullable, null, true);
        } elseif ('void' === $phpTypeOrClass) {
            $type = new Type(Type::BUILTIN_TYPE_NULL, $nullable);
        } elseif ($reflectionType->isBuiltin()) {
            $type = new Type($phpTypeOrClass, $nullable);
        } else {
            $type = new Type(Type::BUILTIN_TYPE_OBJECT, $nullable, $phpTypeOrClass);
        }

        return $type;
    }

    private function isPublicProperty(string $class, string $property): bool
    {
        try {
            $reflectionProperty = new \ReflectionProperty($class, $property);

            return $reflectionProperty->isPublic();
        } catch (\ReflectionException $e) {
            // Return false if the property doesn't exist
        }

        return false;
    }

    /**
     * Gets the accessor method.
     *
     * Returns an array with a the instance of \ReflectionMethod as first key
     * and the prefix of the method as second or null if not found.
     */
    private function getAccessorMethod(string $class, string $property): ?array
    {
        $ucProperty = ucfirst($property);

        foreach ($this->accessorPrefixes as $prefix) {
            try {
                $reflectionMethod = new \ReflectionMethod($class, $prefix . $ucProperty);
                if ($reflectionMethod->isStatic()) {
                    continue;
                }

                if (0 === $reflectionMethod->getNumberOfRequiredParameters()) {
                    return [$reflectionMethod, $prefix];
                }
            } catch (\ReflectionException $e) {
                // Return null if the property doesn't exist
            }
        }

        return null;
    }

    /**
     * Returns an array with a the instance of \ReflectionMethod as first key
     * and the prefix of the method as second or null if not found.
     */
    private function getMutatorMethod(string $class, string $property): ?array
    {
        $ucProperty = ucfirst($property);
        $ucSingulars = (array) Inflector::singularize($ucProperty);

        foreach ($this->mutatorPrefixes as $prefix) {
            $names = [$ucProperty];
            if (in_array($prefix, $this->arrayMutatorPrefixes)) {
                $names = array_merge($names, $ucSingulars);
            }

            foreach ($names as $name) {
                try {
                    $reflectionMethod = new \ReflectionMethod($class, $prefix . $name);
                    if ($reflectionMethod->isStatic()) {
                        continue;
                    }

                    // Parameter can be optional to allow things like: method(array $foo = null)
                    if ($reflectionMethod->getNumberOfParameters() >= 1) {
                        return [$reflectionMethod, $prefix];
                    }
                } catch (\ReflectionException $e) {
                    // Try the next prefix if the method doesn't exist
                }
            }
        }

        return null;
    }

    private function getPropertyName(string $methodName, array $reflectionProperties): ?string
    {
        $pattern = implode('|', array_merge($this->accessorPrefixes, $this->mutatorPrefixes));

        if ('' !== $pattern && preg_match('/^(' . $pattern . ')(.+)$/i', $methodName, $matches)) {
            if (!in_array($matches[1], $this->arrayMutatorPrefixes)) {
                return $matches[2];
            }

            foreach ($reflectionProperties as $reflectionProperty) {
                foreach ((array) Inflector::singularize($reflectionProperty->name) as $name) {
                    if (strtolower($name) === strtolower($matches[2])) {
                        return $reflectionProperty->name;
                    }
                }
            }

            return $matches[2];
        }

        return null;
    }
}
