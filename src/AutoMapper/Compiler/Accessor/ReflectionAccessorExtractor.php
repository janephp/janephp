<?php

namespace Jane\AutoMapper\Compiler\Accessor;

use Doctrine\Common\Inflector\Inflector;

class ReflectionAccessorExtractor implements AccessorExtractorInterface
{
    private $allowPrivate;

    public function __construct($allowPrivate = false)
    {
        $this->allowPrivate = $allowPrivate;
    }

    public function getReadAccessor(string $class, string $property): ReadAccessor
    {
        $reflClass = new \ReflectionClass($class);
        $hasProperty = $reflClass->hasProperty($property);
        $camelProp = Inflector::camelize($property);
        $getter = 'get' . $camelProp;
        $getsetter = lcfirst($camelProp); // jQuery style, e.g. read: last(), write: last($item)
        $isser = 'is' . $camelProp;
        $hasser = 'has' . $camelProp;
        $accessPrivate = false;

        // @TODO Extract this into multiple parts to allow user to choose preferred methods
        if ($reflClass->hasMethod($getter) && $reflClass->getMethod($getter)->isPublic()) {
            $accessType = ReadAccessor::TYPE_METHOD;
            $accessName = $getter;
        } elseif ($reflClass->hasMethod($getsetter) && $reflClass->getMethod($getsetter)->isPublic()) {
            $accessType = ReadAccessor::TYPE_METHOD;
            $accessName = $getsetter;
        } elseif ($reflClass->hasMethod($isser) && $reflClass->getMethod($isser)->isPublic()) {
            $accessType = ReadAccessor::TYPE_METHOD;
            $accessName = $isser;
        } elseif ($reflClass->hasMethod($hasser) && $reflClass->getMethod($hasser)->isPublic()) {
            $accessType = ReadAccessor::TYPE_METHOD;
            $accessName = $hasser;
        } elseif ($reflClass->hasMethod('__get') && $reflClass->getMethod('__get')->isPublic()) {
            $accessType = ReadAccessor::TYPE_PROPERTY;
            $accessName = $property;
        } elseif ($hasProperty && $reflClass->getProperty($property)->isPublic()) {
            $accessType = ReadAccessor::TYPE_PROPERTY;
            $accessName = $property;
        } elseif ($hasProperty && $this->allowPrivate && $reflClass->getProperty($property)) {
            $accessType = ReadAccessor::TYPE_PROPERTY;
            $accessName = $property;
            $accessPrivate = true;
        } else {
            $methods = [$getter, $getsetter, $isser, $hasser, '__get'];

            throw new \RuntimeException(sprintf(
                'Neither the property "%s" nor one of the methods "%s()" ' .
                'exist and have public access in class "%s".',
                $property,
                implode('()", "', $methods),
                $reflClass->name
            ));
        }

        return new ReadAccessor($accessType, $accessName, $accessPrivate);
    }

    public function getWriteMutator(string $class, string $property): WriteMutator
    {
        $reflClass = new \ReflectionClass($class);
        $hasProperty = $reflClass->hasProperty($property);
        $camelized = Inflector::camelize($property);
        $singulars = (array) Inflector::singularize($camelized);
        $accessRemover = null;
        $accessName = null;
        $accessType = null;
        $accessPrivate = false;
        $constructor = $reflClass->getConstructor();

        if ($accessType === null) {
            $setter = 'set' . $camelized;
            $getsetter = lcfirst($camelized); // jQuery style, e.g. read: last(), write: last($item)

            // @TODO Extract this into multiple parts to allow user to choose preferred methods
            if ($this->isMethodAccessible($reflClass, $setter, 1)) {
                $accessType = WriteMutator::TYPE_METHOD;
                $accessName = $setter;
            } elseif ($this->isMethodAccessible($reflClass, $getsetter, 1)) {
                $accessType = WriteMutator::TYPE_METHOD;
                $accessName = $getsetter;
            } elseif ($this->isMethodAccessible($reflClass, '__set', 2)) {
                $accessType = WriteMutator::TYPE_PROPERTY;
                $accessName = $property;
            } elseif ($hasProperty && $reflClass->getProperty($property)->isPublic()) {
                $accessType = WriteMutator::TYPE_PROPERTY;
                $accessName = $property;
            } elseif ($hasProperty && $this->allowPrivate && $reflClass->getProperty($property)) {
                $accessType = WriteMutator::TYPE_PROPERTY;
                $accessName = $property;
                $accessPrivate = true;
            } else {
                throw new \RuntimeException(sprintf(
                    'Neither the property "%s" nor one of the methods %s"%s()", "%s()", ' .
                    '"__set()" or "__call()" exist and have public access in class "%s".',
                    $property,
                    implode('', array_map(function ($singular) {
                        return '"add' . $singular . '()"/"remove' . $singular . '()", ';
                    }, $singulars)),
                    $setter,
                    $getsetter,
                    $reflClass->name
                ));
            }
        }

        return new WriteMutator($accessType, $accessName, false, $accessRemover, $accessPrivate);
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
