<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AssignTagboxItemsInLayerActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\AssignTagboxItemsInLayerAction';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AssignTagboxItemsInLayerAction';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\AssignTagboxItemsInLayerAction();
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
        if (\array_key_exists('namedCache', $data) && $data['namedCache'] !== null) {
            $object->setNamedCache($data['namedCache']);
        }
        elseif (\array_key_exists('namedCache', $data) && $data['namedCache'] === null) {
            $object->setNamedCache(null);
        }
        if (\array_key_exists('refIds', $data) && $data['refIds'] !== null) {
            $object->setRefIds($data['refIds']);
        }
        elseif (\array_key_exists('refIds', $data) && $data['refIds'] === null) {
            $object->setRefIds(null);
        }
        if (\array_key_exists('replace', $data)) {
            $object->setReplace($data['replace']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTraceRefId()) {
            $data['traceRefId'] = $object->getTraceRefId();
        }
        $data['kind'] = $object->getKind();
        if (null !== $object->getNamedCache()) {
            $data['namedCache'] = $object->getNamedCache();
        }
        if (null !== $object->getRefIds()) {
            $data['refIds'] = $object->getRefIds();
        }
        if (null !== $object->getReplace()) {
            $data['replace'] = $object->getReplace();
        }
        return $data;
    }
}