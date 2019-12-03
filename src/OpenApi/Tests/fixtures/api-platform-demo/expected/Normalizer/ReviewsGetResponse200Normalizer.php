<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReviewsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ApiPlatform\Demo\Model\ReviewsGetResponse200();
        if (property_exists($data, 'hydra:member')) {
            $values = array();
            foreach ($data->{'hydra:member'} as $value) {
                $values[] = $value;
            }
            $object->setHydra:member($values);
        }
        if (property_exists($data, 'hydra:totalItems')) {
            $object->setHydra:totalItems($data->{'hydra:totalItems'});
        }
        if (property_exists($data, 'hydra:view')) {
            $object->setHydra:view($this->denormalizer->denormalize($data->{'hydra:view'}, 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraView', 'json', $context));
        }
        if (property_exists($data, 'hydra:search')) {
            $object->setHydra:search($this->denormalizer->denormalize($data->{'hydra:search'}, 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraSearch', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getHydra:member()) {
            $values = array();
            foreach ($object->getHydra:member() as $value) {
                $values[] = $value;
            }
            $data->{'hydra:member'} = $values;
        }
        if (null !== $object->getHydra:totalItems()) {
            $data->{'hydra:totalItems'} = $object->getHydra:totalItems();
        }
        if (null !== $object->getHydra:view()) {
            $data->{'hydra:view'} = $this->normalizer->normalize($object->getHydra:view(), 'json', $context);
        }
        if (null !== $object->getHydra:search()) {
            $data->{'hydra:search'} = $this->normalizer->normalize($object->getHydra:search(), 'json', $context);
        }
        return $data;
    }
}