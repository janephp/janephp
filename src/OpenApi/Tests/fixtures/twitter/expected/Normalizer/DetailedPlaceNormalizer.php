<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DetailedPlaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedPlace';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedPlace';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\DetailedPlace();
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('country_code', $data)) {
            $object->setCountryCode($data['country_code']);
        }
        if (\array_key_exists('place_type', $data)) {
            $object->setPlaceType($data['place_type']);
        }
        if (\array_key_exists('full_name', $data)) {
            $object->setFullName($data['full_name']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
        }
        if (\array_key_exists('contained_within', $data)) {
            $values = array();
            foreach ($data['contained_within'] as $value) {
                $values[] = $value;
            }
            $object->setContainedWithin($values);
        }
        if (\array_key_exists('geo', $data)) {
            $object->setGeo($this->denormalizer->denormalize($data['geo'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\Geo', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getCountryCode()) {
            $data['country_code'] = $object->getCountryCode();
        }
        if (null !== $object->getPlaceType()) {
            $data['place_type'] = $object->getPlaceType();
        }
        if (null !== $object->getFullName()) {
            $data['full_name'] = $object->getFullName();
        }
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getContainedWithin()) {
            $values = array();
            foreach ($object->getContainedWithin() as $value) {
                $values[] = $value;
            }
            $data['contained_within'] = $values;
        }
        if (null !== $object->getGeo()) {
            $data['geo'] = $this->normalizer->normalize($object->getGeo(), 'json', $context);
        }
        return $data;
    }
}