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
class ReviewsGetResponse200HydraSearchHydraMappingItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraSearchHydraMappingItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraSearchHydraMappingItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \ApiPlatform\Demo\Model\ReviewsGetResponse200HydraSearchHydraMappingItem();
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
        }
        if (\array_key_exists('variable', $data)) {
            $object->setVariable($data['variable']);
        }
        if (\array_key_exists('property', $data)) {
            $object->setProperty($data['property']);
        }
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['@type'] = $object->getType();
        }
        if (null !== $object->getVariable()) {
            $data['variable'] = $object->getVariable();
        }
        if (null !== $object->getProperty()) {
            $data['property'] = $object->getProperty();
        }
        if (null !== $object->getRequired()) {
            $data['required'] = $object->getRequired();
        }
        return $data;
    }
}