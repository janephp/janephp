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
use Jane\JsonSchema\Tests\Expected\Proxy\ProxyTest;
class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Test' || $type === 'Jane\\JsonSchema\\Tests\\Expected\\Proxy\\ProxyTest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\Test || $data instanceof \Jane\JsonSchema\Tests\Expected\Proxy\ProxyTest;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new ProxyTest();
        $properties = $object->__properties();
        if (property_exists($data, '__token')) {
            $properties['__token'] = $data->{'__token'};
        }
        if (property_exists($data, 'email')) {
            $properties['email'] = $data->{'email'};
        }
        return new \Jane\JsonSchema\Tests\Expected\Model\Test($object);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        if ($object instanceof \Jane\JsonSchema\Tests\Expected\Model\Test) {
            $object = new \Jane\JsonSchema\Tests\Expected\Proxy\ProxyTest($object);
        }
        $data = new \stdClass();
        $properties = $object->__properties();
        if (null !== $properties['__token']) {
            $data->{'__token'} = $properties['__token'];
        }
        if (null !== $properties['email']) {
            $data->{'email'} = $properties['email'];
        }
        return $data;
    }
}