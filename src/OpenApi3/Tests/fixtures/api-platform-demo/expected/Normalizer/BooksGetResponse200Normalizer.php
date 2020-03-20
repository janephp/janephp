<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BooksGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ApiPlatform\\Demo\\Model\\BooksGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\BooksGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \ApiPlatform\Demo\Model\BooksGetResponse200();
        if (\array_key_exists('hydra:member', $data)) {
            $values = array();
            foreach ($data['hydra:member'] as $value) {
                $values[] = $value;
            }
            $object->setHydraMember($values);
        }
        if (\array_key_exists('hydra:totalItems', $data)) {
            $object->setHydraTotalItems($data['hydra:totalItems']);
        }
        if (\array_key_exists('hydra:view', $data)) {
            $object->setHydraView($this->denormalizer->denormalize($data['hydra:view'], 'ApiPlatform\\Demo\\Model\\BooksGetResponse200HydraView', 'json', $context));
        }
        if (\array_key_exists('hydra:search', $data)) {
            $object->setHydraSearch($this->denormalizer->denormalize($data['hydra:search'], 'ApiPlatform\\Demo\\Model\\BooksGetResponse200HydraSearch', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getHydraMember()) {
            $values = array();
            foreach ($object->getHydraMember() as $value) {
                $values[] = $value;
            }
            $data['hydra:member'] = $values;
        }
        if (null !== $object->getHydraTotalItems()) {
            $data['hydra:totalItems'] = $object->getHydraTotalItems();
        }
        if (null !== $object->getHydraView()) {
            $data['hydra:view'] = $this->normalizer->normalize($object->getHydraView(), 'json', $context);
        }
        if (null !== $object->getHydraSearch()) {
            $data['hydra:search'] = $this->normalizer->normalize($object->getHydraSearch(), 'json', $context);
        }
        return $data;
    }
}