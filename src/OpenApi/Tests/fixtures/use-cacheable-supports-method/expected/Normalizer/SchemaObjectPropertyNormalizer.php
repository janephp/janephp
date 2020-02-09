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
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
class SchemaObjectPropertyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, string $type, string $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\SchemaObjectProperty';
    }
    public function supportsNormalization($data, string $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\SchemaObjectProperty';
    }
    public function denormalize($data, $class, string $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\SchemaObjectProperty();
        if (property_exists($data, 'stringProperty')) {
            $object->setStringProperty($data->{'stringProperty'});
        }
        return $object;
    }
    public function normalize($object, string $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStringProperty()) {
            $data->{'stringProperty'} = $object->getStringProperty();
        }
        return $data;
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}