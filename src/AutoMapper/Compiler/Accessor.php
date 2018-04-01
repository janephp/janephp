<?php

namespace Jane\AutoMapper\Compiler;

use Doctrine\Common\Inflector\Inflector;

class Accessor
{
    public function getReadAccessor(string $class, string $property): Access
    {
        $reflClass = new \ReflectionClass($class);
        $hasProperty = $reflClass->hasProperty($property);
        $camelProp = Inflector::camelize($property);
        $getter = 'get'.$camelProp;
        $getsetter = lcfirst($camelProp); // jQuery style, e.g. read: last(), write: last($item)
        $isser = 'is'.$camelProp;
        $hasser = 'has'.$camelProp;
        $accessRef = false;

        if ($reflClass->hasMethod($getter) && $reflClass->getMethod($getter)->isPublic()) {
            $accessType = Access::TYPE_METHOD;
            $accessName = $getter;
        } elseif ($reflClass->hasMethod($getsetter) && $reflClass->getMethod($getsetter)->isPublic()) {
            $accessType = Access::TYPE_METHOD;
            $accessName = $getsetter;
        } elseif ($reflClass->hasMethod($isser) && $reflClass->getMethod($isser)->isPublic()) {
            $accessType = Access::TYPE_METHOD;
            $accessName = $isser;
        } elseif ($reflClass->hasMethod($hasser) && $reflClass->getMethod($hasser)->isPublic()) {
            $accessType = Access::TYPE_METHOD;
            $accessName = $hasser;
        } elseif ($reflClass->hasMethod('__get') && $reflClass->getMethod('__get')->isPublic()) {
            $accessType = Access::TYPE_PROPERTY;
            $accessName = $property;
        } elseif ($hasProperty && $reflClass->getProperty($property)->isPublic()) {
            $accessType = Access::TYPE_PROPERTY;
            $accessName = $property;
            $accessRef = true;
        } else {
            $methods = array($getter, $getsetter, $isser, $hasser, '__get');

            throw new \RuntimeException(sprintf(
                'Neither the property "%s" nor one of the methods "%s()" '.
                'exist and have public access in class "%s".',
                $property,
                implode('()", "', $methods),
                $reflClass->name
            ));
        }

        return new Access($accessType, $accessName, $accessRef);
    }

    public function getWriteAccessor(string $class, string $property, bool $isArray)
    {
        $reflClass = new \ReflectionClass($class);
        $hasProperty = $reflClass->hasProperty($property);
        $camelized = Inflector::camelize($property);
        $singulars = (array) Inflector::singularize($camelized);
        $accessRemover = null;
        $accessName = null;
        $accessType = null;

        if ($isArray) {
            $methods = $this->findAdderAndRemover($reflClass, $singulars);

            if (null !== $methods) {
                $accessType = Access::TYPE_ADDER_AND_REMOVER;
                $accessName = $methods[0];
                $accessRemover = $methods[1];
            }
        }

        if ($accessType === null) {
            $setter = 'set'.$camelized;
            $getsetter = lcfirst($camelized); // jQuery style, e.g. read: last(), write: last($item)

            if ($this->isMethodAccessible($reflClass, $setter, 1)) {
                $accessType = Access::TYPE_METHOD;
                $accessName = $setter;
            } elseif ($this->isMethodAccessible($reflClass, $getsetter, 1)) {
                $accessType = Access::TYPE_METHOD;
                $accessName = $getsetter;
            } elseif ($this->isMethodAccessible($reflClass, '__set', 2)) {
                $accessType = Access::TYPE_PROPERTY;
                $accessName = $property;
            } elseif ($hasProperty && $reflClass->getProperty($property)->isPublic()) {
                $accessType = Access::TYPE_PROPERTY;
                $accessName = $property;
            } elseif (null !== $methods = $this->findAdderAndRemover($reflClass, $singulars)) {
                throw new \RuntimeException(sprintf(
                    'The property "%s" in class "%s" can be defined with the methods "%s()" but '.
                    'the new value must be an array or an instance of \Traversable, ',
                    $property,
                    $reflClass->name,
                    implode('()", "', $methods)
                ));
            } else {
                throw new \RuntimeException(sprintf(
                    'Neither the property "%s" nor one of the methods %s"%s()", "%s()", '.
                    '"__set()" or "__call()" exist and have public access in class "%s".',
                    $property,
                    implode('', array_map(function ($singular) {
                        return '"add'.$singular.'()"/"remove'.$singular.'()", ';
                    }, $singulars)),
                    $setter,
                    $getsetter,
                    $reflClass->name
                ));
            }
        }

        return new Access($accessType, $accessName, false, $accessRemover);
    }


    /**
     * Searches for add and remove methods.
     *
     * @param \ReflectionClass $reflClass The reflection class for the given object
     * @param array            $singulars The singular form of the property name or null
     *
     * @return array|null An array containing the adder and remover when found, null otherwise
     */
    private function findAdderAndRemover(\ReflectionClass $reflClass, array $singulars): ?array
    {
        foreach ($singulars as $singular) {
            $addMethod = 'add'.$singular;
            $removeMethod = 'remove'.$singular;

            $addMethodFound = $this->isMethodAccessible($reflClass, $addMethod, 1);
            $removeMethodFound = $this->isMethodAccessible($reflClass, $removeMethod, 1);

            if ($addMethodFound && $removeMethodFound) {
                return array($addMethod, $removeMethod);
            }
        }

        return null;
    }

    /**
     * Returns whether a method is public and has the number of required parameters.
     */
    private function isMethodAccessible(\ReflectionClass $class, string $methodName, int $parameters): bool
    {
        if ($class->hasMethod($methodName)) {
            $method = $class->getMethod($methodName);

            if ($method->isPublic()
                && $method->getNumberOfRequiredParameters() <= $parameters
                && $method->getNumberOfParameters() >= $parameters) {
                return true;
            }
        }

        return false;
    }
}