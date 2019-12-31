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
class ParchmentsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ApiPlatform\\Demo\\Model\\ParchmentsGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ParchmentsGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ApiPlatform\Demo\Model\ParchmentsGetResponse200();
        if (property_exists($data, 'hydra:member')) {
            $values = array();
            foreach ($data->{'hydra:member'} as $value) {
                $values[] = $value;
            }
            $object->setHydraMember($values);
        }
        if (property_exists($data, 'hydra:totalItems')) {
            $object->setHydraTotalItems($data->{'hydra:totalItems'});
        }
        if (property_exists($data, 'hydra:view')) {
            $object->setHydraView($this->denormalizer->denormalize($data->{'hydra:view'}, 'ApiPlatform\\Demo\\Model\\ParchmentsGetResponse200HydraView', 'json', $context));
        }
        if (property_exists($data, 'hydra:search')) {
            $object->setHydraSearch($this->denormalizer->denormalize($data->{'hydra:search'}, 'ApiPlatform\\Demo\\Model\\ParchmentsGetResponse200HydraSearch', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getHydraMember()) {
            $values = array();
            foreach ($object->getHydraMember() as $value) {
                $values[] = $value;
            }
            $data->{'hydra:member'} = $values;
        }
        if (null !== $object->getHydraTotalItems()) {
            $data->{'hydra:totalItems'} = $object->getHydraTotalItems();
        }
        if (null !== $object->getHydraView()) {
            $data->{'hydra:view'} = $this->normalizer->normalize($object->getHydraView(), 'json', $context);
        }
        if (null !== $object->getHydraSearch()) {
            $data->{'hydra:search'} = $this->normalizer->normalize($object->getHydraSearch(), 'json', $context);
        }
        return $data;
    }
}