<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TestFormPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TestFormPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TestFormPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\TestFormPostBody();
        if (\array_key_exists('testString', $data)) {
            $object->setTestString($data['testString']);
        }
        if (\array_key_exists('testInteger', $data)) {
            $object->setTestInteger($data['testInteger']);
        }
        if (\array_key_exists('testFloat', $data)) {
            $object->setTestFloat($data['testFloat']);
        }
        if (\array_key_exists('testArray', $data)) {
            $values = array();
            foreach ($data['testArray'] as $value) {
                $values[] = $value;
            }
            $object->setTestArray($values);
        }
        if (\array_key_exists('testRequired', $data)) {
            $object->setTestRequired($data['testRequired']);
        }
        if (\array_key_exists('testDefault', $data)) {
            $object->setTestDefault($data['testDefault']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTestString()) {
            $data['testString'] = $object->getTestString();
        }
        if (null !== $object->getTestInteger()) {
            $data['testInteger'] = $object->getTestInteger();
        }
        if (null !== $object->getTestFloat()) {
            $data['testFloat'] = $object->getTestFloat();
        }
        if (null !== $object->getTestArray()) {
            $values = array();
            foreach ($object->getTestArray() as $value) {
                $values[] = $value;
            }
            $data['testArray'] = $values;
        }
        if (null !== $object->getTestRequired()) {
            $data['testRequired'] = $object->getTestRequired();
        }
        if (null !== $object->getTestDefault()) {
            $data['testDefault'] = $object->getTestDefault();
        }
        return $data;
    }
}