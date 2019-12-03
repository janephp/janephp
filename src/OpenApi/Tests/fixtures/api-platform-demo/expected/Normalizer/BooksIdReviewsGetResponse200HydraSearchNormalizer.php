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
class BooksIdReviewsGetResponse200HydraSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraSearch';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraSearch';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ApiPlatform\Demo\Model\BooksIdReviewsGetResponse200HydraSearch();
        if (property_exists($data, '@type')) {
            $object->set@type($data->{'@type'});
        }
        if (property_exists($data, 'hydra:template')) {
            $object->setHydra:template($data->{'hydra:template'});
        }
        if (property_exists($data, 'hydra:variableRepresentation')) {
            $object->setHydra:variableRepresentation($data->{'hydra:variableRepresentation'});
        }
        if (property_exists($data, 'hydra:mapping')) {
            $values = array();
            foreach ($data->{'hydra:mapping'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ApiPlatform\\Demo\\Model\\BooksIdReviewsGetResponse200HydraSearchHydraMappingItem', 'json', $context);
            }
            $object->setHydra:mapping($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->get@type()) {
            $data->{'@type'} = $object->get@type();
        }
        if (null !== $object->getHydra:template()) {
            $data->{'hydra:template'} = $object->getHydra:template();
        }
        if (null !== $object->getHydra:variableRepresentation()) {
            $data->{'hydra:variableRepresentation'} = $object->getHydra:variableRepresentation();
        }
        if (null !== $object->getHydra:mapping()) {
            $values = array();
            foreach ($object->getHydra:mapping() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'hydra:mapping'} = $values;
        }
        return $data;
    }
}