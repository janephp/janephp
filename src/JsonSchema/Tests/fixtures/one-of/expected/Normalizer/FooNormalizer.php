<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FooNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Foo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\Foo;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Foo();
        if (\array_key_exists('foo', $data)) {
            $value = $data['foo'];
            if (is_string($data['foo'])) {
                $value = $data['foo'];
            } elseif (isset($data['foo'])) {
                $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['foo'] as $key => $value_1) {
                    if (preg_match('/^[a-zA-Z0-9._-]+$/', (string) $key) && isset($value_1)) {
                        $value_2 = $value_1;
                        if (is_array($value_1)) {
                            $value_2 = $value_1;
                        } elseif (is_null($value_1)) {
                            $value_2 = $value_1;
                        }
                        $values[$key] = $value_2;
                        continue;
                    }
                }
                $value = $values;
            }
            $object->setFoo($value);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFoo()) {
            $value = $object->getFoo();
            if (is_string($object->getFoo())) {
                $value = $object->getFoo();
            } elseif (!is_null($object->getFoo())) {
                $values = array();
                foreach ($object->getFoo() as $key => $value_1) {
                    if (preg_match('/^[a-zA-Z0-9._-]+$/', (string) $key) && !is_null($value_1)) {
                        $value_2 = $value_1;
                        if (is_object($value_1)) {
                            $value_2 = $value_1;
                        } elseif (is_null($value_1)) {
                            $value_2 = $value_1;
                        }
                        $values[$key] = $value_2;
                        continue;
                    }
                }
                $value = $values;
            }
            $data['foo'] = $value;
        }
        return $data;
    }
}