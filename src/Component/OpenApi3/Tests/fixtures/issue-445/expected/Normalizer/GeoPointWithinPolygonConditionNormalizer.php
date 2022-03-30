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
class GeoPointWithinPolygonConditionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\GeoPointWithinPolygonCondition';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\GeoPointWithinPolygonCondition';
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
        $object = new \PicturePark\API\Model\GeoPointWithinPolygonCondition();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
            $object->setTraceRefId($data['traceRefId']);
        }
        elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
            $object->setTraceRefId(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('fieldPath', $data) && $data['fieldPath'] !== null) {
            $object->setFieldPath($data['fieldPath']);
        }
        elseif (\array_key_exists('fieldPath', $data) && $data['fieldPath'] === null) {
            $object->setFieldPath(null);
        }
        if (\array_key_exists('polygon', $data) && $data['polygon'] !== null) {
            $values = array();
            foreach ($data['polygon'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\LatLon', 'json', $context);
            }
            $object->setPolygon($values);
        }
        elseif (\array_key_exists('polygon', $data) && $data['polygon'] === null) {
            $object->setPolygon(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTraceRefId()) {
            $data['traceRefId'] = $object->getTraceRefId();
        }
        $data['kind'] = $object->getKind();
        if (null !== $object->getFieldPath()) {
            $data['fieldPath'] = $object->getFieldPath();
        }
        if (null !== $object->getPolygon()) {
            $values = array();
            foreach ($object->getPolygon() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['polygon'] = $values;
        }
        return $data;
    }
}