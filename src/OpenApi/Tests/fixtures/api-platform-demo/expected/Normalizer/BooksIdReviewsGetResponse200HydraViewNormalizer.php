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
class BooksIdReviewsGetResponse200HydraViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ApiPlatform\Demo\Model\BooksIdReviewsGetResponse200HydraView();
        if (property_exists($data, '@id')) {
            $object->set@id($data->{'@id'});
        }
        if (property_exists($data, '@type')) {
            $object->set@type($data->{'@type'});
        }
        if (property_exists($data, 'hydra:first')) {
            $object->setHydra:first($data->{'hydra:first'});
        }
        if (property_exists($data, 'hydra:last')) {
            $object->setHydra:last($data->{'hydra:last'});
        }
        if (property_exists($data, 'hydra:next')) {
            $object->setHydra:next($data->{'hydra:next'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->get@id()) {
            $data->{'@id'} = $object->get@id();
        }
        if (null !== $object->get@type()) {
            $data->{'@type'} = $object->get@type();
        }
        if (null !== $object->getHydra:first()) {
            $data->{'hydra:first'} = $object->getHydra:first();
        }
        if (null !== $object->getHydra:last()) {
            $data->{'hydra:last'} = $object->getHydra:last();
        }
        if (null !== $object->getHydra:next()) {
            $data->{'hydra:next'} = $object->getHydra:next();
        }
        return $data;
    }
}