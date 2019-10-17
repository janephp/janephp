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
use Jane\OpenApi\Tests\Expected\Proxy\ProxyModel;
class ModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Model' || $type === 'Jane\\OpenApi\\Tests\\Expected\\Proxy\\ProxyModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && (get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Model' || get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Proxy\\ProxyModel');
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new ProxyModel();
        $properties = $object->__properties();
        if (property_exists($data, 'foo')) {
            $properties['foo'] = $data->{'foo'};
        }
        if (property_exists($data, 'bar')) {
            $properties['bar'] = $this->denormalizer->denormalize($data->{'bar'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\SubModel', 'json', $context);
        }
        return new \Jane\OpenApi\Tests\Expected\Model\Model($object);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        if ($object instanceof \Jane\OpenApi\Tests\Expected\Model\Model) {
            $object = new \Jane\OpenApi\Tests\Expected\Proxy\ProxyModel($object, $this->normalizer, $context);
        }
        $data = new \stdClass();
        $properties = $object->__properties();
        $data->{'foo'} = $properties['foo'];
        $data->{'bar'} = $this->normalizer->normalize($properties['bar'], 'json', $context);
        return $data;
    }
}