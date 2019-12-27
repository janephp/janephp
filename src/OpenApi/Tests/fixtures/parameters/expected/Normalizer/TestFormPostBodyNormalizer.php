<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\TestFormPostBody();
        if (property_exists($data, 'testString')) {
            $object->setTestString($data->{'testString'});
        }
        if (property_exists($data, 'testInteger')) {
            $object->setTestInteger($data->{'testInteger'});
        }
        if (property_exists($data, 'testFloat')) {
            $object->setTestFloat($data->{'testFloat'});
        }
        if (property_exists($data, 'testArray')) {
            $values = array();
            foreach ($data->{'testArray'} as $value) {
                $values[] = $value;
            }
            $object->setTestArray($values);
        }
        if (property_exists($data, 'testRequired')) {
            $object->setTestRequired($data->{'testRequired'});
        }
        if (property_exists($data, 'testDefault')) {
            $object->setTestDefault($data->{'testDefault'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTestString()) {
            $data->{'testString'} = $object->getTestString();
        }
        if (null !== $object->getTestInteger()) {
            $data->{'testInteger'} = $object->getTestInteger();
        }
        if (null !== $object->getTestFloat()) {
            $data->{'testFloat'} = $object->getTestFloat();
        }
        if (null !== $object->getTestArray()) {
            $values = array();
            foreach ($object->getTestArray() as $value) {
                $values[] = $value;
            }
            $data->{'testArray'} = $values;
        }
        if (null !== $object->getTestRequired()) {
            $data->{'testRequired'} = $object->getTestRequired();
        }
        if (null !== $object->getTestDefault()) {
            $data->{'testDefault'} = $object->getTestDefault();
        }
        return $data;
    }
}