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
            throw new InvalidArgumentException();
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Test();
        if (property_exists($data, 'string')) {
            $object->setString($data->{'string'});
        }
        if (property_exists($data, 'bool')) {
            $object->setBool($data->{'bool'});
        }
        if (property_exists($data, 'integer')) {
            $object->setInteger($data->{'integer'});
        }
        if (property_exists($data, 'float')) {
            $object->setFloat($data->{'float'});
        }
        if (property_exists($data, 'array')) {
            $values = array();
            foreach ($data->{'array'} as $value) {
                $values[] = $value;
            }
            $object->setArray($values);
        }
        if (property_exists($data, 'object')) {
            $values_1 = array();
            foreach ($data->{'object'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setObject($values_1);
        }
        if (property_exists($data, 'subObject')) {
            $object->setSubObject($this->denormalizer->denormalize($data->{'subObject'}, 'Jane\\JsonSchema\\Tests\\Expected\\Model\\TestSubObject', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getString()) {
            $data->{'string'} = $object->getString();
        }
        if (null !== $object->getBool()) {
            $data->{'bool'} = $object->getBool();
        }
        if (null !== $object->getInteger()) {
            $data->{'integer'} = $object->getInteger();
        }
        if (null !== $object->getFloat()) {
            $data->{'float'} = $object->getFloat();
        }
        if (null !== $object->getArray()) {
            $values = array();
            foreach ($object->getArray() as $value) {
                $values[] = $value;
            }
            $data->{'array'} = $values;
        }
        if (null !== $object->getObject()) {
            $values_1 = array();
            foreach ($object->getObject() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'object'} = $values_1;
        }
        if (null !== $object->getSubObject()) {
            $data->{'subObject'} = $this->normalizer->normalize($object->getSubObject(), 'json', $context);
        }
        return $data;
    }
}