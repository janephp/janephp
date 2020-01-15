<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Test();
        if (property_exists($data, 'string') && $data->{'string'} !== null) {
            $object->setString($data->{'string'});
        }
        elseif (property_exists($data, 'string') && $data->{'string'} === null) {
            $object->setString(null);
        }
        if (property_exists($data, 'bool') && $data->{'bool'} !== null) {
            $object->setBool($data->{'bool'});
        }
        elseif (property_exists($data, 'bool') && $data->{'bool'} === null) {
            $object->setBool(null);
        }
        if (property_exists($data, 'integer') && $data->{'integer'} !== null) {
            $object->setInteger($data->{'integer'});
        }
        elseif (property_exists($data, 'integer') && $data->{'integer'} === null) {
            $object->setInteger(null);
        }
        if (property_exists($data, 'float') && $data->{'float'} !== null) {
            $object->setFloat($data->{'float'});
        }
        elseif (property_exists($data, 'float') && $data->{'float'} === null) {
            $object->setFloat(null);
        }
        if (property_exists($data, 'array') && $data->{'array'} !== null) {
            $values = array();
            foreach ($data->{'array'} as $value) {
                $values[] = $value;
            }
            $object->setArray($values);
        }
        elseif (property_exists($data, 'array') && $data->{'array'} === null) {
            $object->setArray(null);
        }
        if (property_exists($data, 'object') && $data->{'object'} !== null) {
            $values_1 = array();
            foreach ($data->{'object'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setObject($values_1);
        }
        elseif (property_exists($data, 'object') && $data->{'object'} === null) {
            $object->setObject(null);
        }
        if (property_exists($data, 'subObject') && $data->{'subObject'} !== null) {
            $object->setSubObject($this->denormalizer->denormalize($data->{'subObject'}, 'Jane\\JsonSchema\\Tests\\Expected\\Model\\TestSubObject', 'json', $context));
        }
        elseif (property_exists($data, 'subObject') && $data->{'subObject'} === null) {
            $object->setSubObject(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getString()) {
            $data->{'string'} = $object->getString();
        }
        else {
            $data->{'string'} = null;
        }
        if (null !== $object->getBool()) {
            $data->{'bool'} = $object->getBool();
        }
        else {
            $data->{'bool'} = null;
        }
        if (null !== $object->getInteger()) {
            $data->{'integer'} = $object->getInteger();
        }
        else {
            $data->{'integer'} = null;
        }
        if (null !== $object->getFloat()) {
            $data->{'float'} = $object->getFloat();
        }
        else {
            $data->{'float'} = null;
        }
        if (null !== $object->getArray()) {
            $values = array();
            foreach ($object->getArray() as $value) {
                $values[] = $value;
            }
            $data->{'array'} = $values;
        }
        else {
            $data->{'array'} = null;
        }
        if (null !== $object->getObject()) {
            $values_1 = array();
            foreach ($object->getObject() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'object'} = $values_1;
        }
        else {
            $data->{'object'} = null;
        }
        if (null !== $object->getSubObject()) {
            $data->{'subObject'} = $this->normalizer->normalize($object->getSubObject(), 'json', $context);
        }
        else {
            $data->{'subObject'} = null;
        }
        return $data;
    }
}