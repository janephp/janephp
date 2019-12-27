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
class ReviewsGetResponse200HydraSearchHydraMappingItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ApiPlatform\Demo\Model\ReviewsGetResponse200HydraSearchHydraMappingItem();
        if (property_exists($data, '@type')) {
            $object->setType($data->{'@type'});
        }
        if (property_exists($data, 'variable')) {
            $object->setVariable($data->{'variable'});
        }
        if (property_exists($data, 'property')) {
            $object->setProperty($data->{'property'});
        }
        if (property_exists($data, 'required')) {
            $object->setRequired($data->{'required'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'@type'} = $object->getType();
        }
        if (null !== $object->getVariable()) {
            $data->{'variable'} = $object->getVariable();
        }
        if (null !== $object->getProperty()) {
            $data->{'property'} = $object->getProperty();
        }
        if (null !== $object->getRequired()) {
            $data->{'required'} = $object->getRequired();
        }
        return $data;
    }
}