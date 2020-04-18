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
class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Test';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\Test;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Test();
        if (\array_key_exists('string', $data) && $data['string'] !== null) {
            $object->setString($data['string']);
        }
        elseif (\array_key_exists('string', $data) && $data['string'] === null) {
            $object->setString(null);
        }
        if (\array_key_exists('bool', $data) && $data['bool'] !== null) {
            $object->setBool($data['bool']);
        }
        elseif (\array_key_exists('bool', $data) && $data['bool'] === null) {
            $object->setBool(null);
        }
        if (\array_key_exists('integer', $data) && $data['integer'] !== null) {
            $object->setInteger($data['integer']);
        }
        elseif (\array_key_exists('integer', $data) && $data['integer'] === null) {
            $object->setInteger(null);
        }
        if (\array_key_exists('float', $data) && $data['float'] !== null) {
            $object->setFloat($data['float']);
        }
        elseif (\array_key_exists('float', $data) && $data['float'] === null) {
            $object->setFloat(null);
        }
        if (\array_key_exists('array', $data) && $data['array'] !== null) {
            $values = array();
            foreach ($data['array'] as $value) {
                $values[] = $value;
            }
            $object->setArray($values);
        }
        elseif (\array_key_exists('array', $data) && $data['array'] === null) {
            $object->setArray(null);
        }
        if (\array_key_exists('object', $data) && $data['object'] !== null) {
            $values_1 = array();
            foreach ($data['object'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setObject($values_1);
        }
        elseif (\array_key_exists('object', $data) && $data['object'] === null) {
            $object->setObject(null);
        }
        if (\array_key_exists('subObject', $data) && $data['subObject'] !== null) {
            $object->setSubObject($this->denormalizer->denormalize($data['subObject'], 'Jane\\JsonSchema\\Tests\\Expected\\Model\\TestSubObject', 'json', $context));
        }
        elseif (\array_key_exists('subObject', $data) && $data['subObject'] === null) {
            $object->setSubObject(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getString()) {
            $data['string'] = $object->getString();
        }
        if (null !== $object->getBool()) {
            $data['bool'] = $object->getBool();
        }
        if (null !== $object->getInteger()) {
            $data['integer'] = $object->getInteger();
        }
        if (null !== $object->getFloat()) {
            $data['float'] = $object->getFloat();
        }
        if (null !== $object->getArray()) {
            $values = array();
            foreach ($object->getArray() as $value) {
                $values[] = $value;
            }
            $data['array'] = $values;
        }
        if (null !== $object->getObject()) {
            $values_1 = array();
            foreach ($object->getObject() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['object'] = $values_1;
        }
        if (null !== $object->getSubObject()) {
            $data['subObject'] = $this->normalizer->normalize($object->getSubObject(), 'json', $context);
        }
        return $data;
    }
}