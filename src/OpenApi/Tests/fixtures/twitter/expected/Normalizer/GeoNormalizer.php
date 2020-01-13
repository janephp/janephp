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
class GeoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Geo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Geo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\Geo();
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'bbox')) {
            $values = array();
            foreach ($data->{'bbox'} as $value) {
                $values[] = $value;
            }
            $object->setBbox($values);
        }
        if (property_exists($data, 'geometry')) {
            $object->setGeometry($this->denormalizer->denormalize($data->{'geometry'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Point', 'json', $context));
        }
        if (property_exists($data, 'properties')) {
            $object->setProperties($data->{'properties'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getBbox()) {
            $values = array();
            foreach ($object->getBbox() as $value) {
                $values[] = $value;
            }
            $data->{'bbox'} = $values;
        }
        if (null !== $object->getGeometry()) {
            $data->{'geometry'} = $this->normalizer->normalize($object->getGeometry(), 'json', $context);
        }
        if (null !== $object->getProperties()) {
            $data->{'properties'} = $object->getProperties();
        }
        return $data;
    }
}