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
class DefaultUserFieldsEntitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUserFieldsEntities';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUserFieldsEntities';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\DefaultUserFieldsEntities();
        if (property_exists($data, 'url')) {
            $object->setUrl($this->denormalizer->denormalize($data->{'url'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUserFieldsEntitiesUrl', 'json', $context));
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($this->denormalizer->denormalize($data->{'description'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\FullTextEntities', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getUrl()) {
            $data->{'url'} = $this->normalizer->normalize($object->getUrl(), 'json', $context);
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $this->normalizer->normalize($object->getDescription(), 'json', $context);
        }
        return $data;
    }
}