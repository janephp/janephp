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
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ApiPlatform\Demo\Model\BooksIdReviewsGetResponse200HydraView();
        if (property_exists($data, '@id')) {
            $object->setId($data->{'@id'});
        }
        if (property_exists($data, '@type')) {
            $object->setType($data->{'@type'});
        }
        if (property_exists($data, 'hydra:first')) {
            $object->setHydraFirst($data->{'hydra:first'});
        }
        if (property_exists($data, 'hydra:last')) {
            $object->setHydraLast($data->{'hydra:last'});
        }
        if (property_exists($data, 'hydra:next')) {
            $object->setHydraNext($data->{'hydra:next'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'@id'} = $object->getId();
        }
        if (null !== $object->getType()) {
            $data->{'@type'} = $object->getType();
        }
        if (null !== $object->getHydraFirst()) {
            $data->{'hydra:first'} = $object->getHydraFirst();
        }
        if (null !== $object->getHydraLast()) {
            $data->{'hydra:last'} = $object->getHydraLast();
        }
        if (null !== $object->getHydraNext()) {
            $data->{'hydra:next'} = $object->getHydraNext();
        }
        return $data;
    }
}