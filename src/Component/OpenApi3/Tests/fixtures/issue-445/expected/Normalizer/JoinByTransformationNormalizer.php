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
class JoinByTransformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\JoinByTransformation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\JoinByTransformation';
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
        $object = new \PicturePark\API\Model\JoinByTransformation();
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
        if (\array_key_exists('separator', $data) && $data['separator'] !== null) {
            $object->setSeparator($data['separator']);
        }
        elseif (\array_key_exists('separator', $data) && $data['separator'] === null) {
            $object->setSeparator(null);
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
        if (null !== $object->getSeparator()) {
            $data['separator'] = $object->getSeparator();
        }
        return $data;
    }
}