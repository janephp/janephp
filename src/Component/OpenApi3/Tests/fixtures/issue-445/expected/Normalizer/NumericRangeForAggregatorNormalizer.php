<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NumericRangeForAggregatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\NumericRangeForAggregator';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\NumericRangeForAggregator';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\NumericRangeForAggregator();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('from', $data) && $data['from'] !== null) {
            $object->setFrom($data['from']);
        }
        elseif (\array_key_exists('from', $data) && $data['from'] === null) {
            $object->setFrom(null);
        }
        if (\array_key_exists('to', $data) && $data['to'] !== null) {
            $object->setTo($data['to']);
        }
        elseif (\array_key_exists('to', $data) && $data['to'] === null) {
            $object->setTo(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNames()) {
            $data['names'] = $object->getNames();
        }
        if (null !== $object->getFrom()) {
            $data['from'] = $object->getFrom();
        }
        if (null !== $object->getTo()) {
            $data['to'] = $object->getTo();
        }
        return $data;
    }
}