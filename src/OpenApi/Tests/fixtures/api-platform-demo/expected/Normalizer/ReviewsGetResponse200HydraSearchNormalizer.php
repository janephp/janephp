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
class ReviewsGetResponse200HydraSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraSearch';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraSearch';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ApiPlatform\Demo\Model\ReviewsGetResponse200HydraSearch();
        if (property_exists($data, '@type')) {
            $object->setType($data->{'@type'});
        }
        if (property_exists($data, 'hydra:template')) {
            $object->setHydraTemplate($data->{'hydra:template'});
        }
        if (property_exists($data, 'hydra:variableRepresentation')) {
            $object->setHydraVariableRepresentation($data->{'hydra:variableRepresentation'});
        }
        if (property_exists($data, 'hydra:mapping')) {
            $values = array();
            foreach ($data->{'hydra:mapping'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ApiPlatform\\Demo\\Model\\ReviewsGetResponse200HydraSearchHydraMappingItem', 'json', $context);
            }
            $object->setHydraMapping($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'@type'} = $object->getType();
        }
        if (null !== $object->getHydraTemplate()) {
            $data->{'hydra:template'} = $object->getHydraTemplate();
        }
        if (null !== $object->getHydraVariableRepresentation()) {
            $data->{'hydra:variableRepresentation'} = $object->getHydraVariableRepresentation();
        }
        if (null !== $object->getHydraMapping()) {
            $values = array();
            foreach ($object->getHydraMapping() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'hydra:mapping'} = $values;
        }
        return $data;
    }
}