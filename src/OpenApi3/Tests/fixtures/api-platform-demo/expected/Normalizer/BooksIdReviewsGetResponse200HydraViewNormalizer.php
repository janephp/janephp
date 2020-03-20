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
class BooksIdReviewsGetResponse200HydraViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraView';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraView';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \ApiPlatform\Demo\Model\BooksIdReviewsGetResponse200HydraView();
        if (\array_key_exists('@id', $data)) {
            $object->setId($data['@id']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
        }
        if (\array_key_exists('hydra:first', $data)) {
            $object->setHydraFirst($data['hydra:first']);
        }
        if (\array_key_exists('hydra:last', $data)) {
            $object->setHydraLast($data['hydra:last']);
        }
        if (\array_key_exists('hydra:next', $data)) {
            $object->setHydraNext($data['hydra:next']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['@id'] = $object->getId();
        }
        if (null !== $object->getType()) {
            $data['@type'] = $object->getType();
        }
        if (null !== $object->getHydraFirst()) {
            $data['hydra:first'] = $object->getHydraFirst();
        }
        if (null !== $object->getHydraLast()) {
            $data['hydra:last'] = $object->getHydraLast();
        }
        if (null !== $object->getHydraNext()) {
            $data['hydra:next'] = $object->getHydraNext();
        }
        return $data;
    }
}