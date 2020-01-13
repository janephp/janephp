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
class ContextAnnotationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\ContextAnnotation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\ContextAnnotation';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\ContextAnnotation();
        if (property_exists($data, 'domain')) {
            $object->setDomain($this->denormalizer->denormalize($data->{'domain'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\ContextAnnotationDomainFields', 'json', $context));
        }
        if (property_exists($data, 'entity')) {
            $object->setEntity($this->denormalizer->denormalize($data->{'entity'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\ContextAnnotationEntityFields', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDomain()) {
            $data->{'domain'} = $this->normalizer->normalize($object->getDomain(), 'json', $context);
        }
        if (null !== $object->getEntity()) {
            $data->{'entity'} = $this->normalizer->normalize($object->getEntity(), 'json', $context);
        }
        return $data;
    }
}