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
class LiveStreamTraceJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\LiveStreamTraceJob';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\LiveStreamTraceJob';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\LiveStreamTraceJob();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('traceJobId', $data) && $data['traceJobId'] !== null) {
            $object->setTraceJobId($data['traceJobId']);
        }
        elseif (\array_key_exists('traceJobId', $data) && $data['traceJobId'] === null) {
            $object->setTraceJobId(null);
        }
        if (\array_key_exists('ipAddress', $data) && $data['ipAddress'] !== null) {
            $object->setIpAddress($data['ipAddress']);
        }
        elseif (\array_key_exists('ipAddress', $data) && $data['ipAddress'] === null) {
            $object->setIpAddress(null);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
        }
        elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('apiClientId', $data) && $data['apiClientId'] !== null) {
            $object->setApiClientId($data['apiClientId']);
        }
        elseif (\array_key_exists('apiClientId', $data) && $data['apiClientId'] === null) {
            $object->setApiClientId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTraceJobId()) {
            $data['traceJobId'] = $object->getTraceJobId();
        }
        if (null !== $object->getIpAddress()) {
            $data['ipAddress'] = $object->getIpAddress();
        }
        if (null !== $object->getUserId()) {
            $data['userId'] = $object->getUserId();
        }
        if (null !== $object->getApiClientId()) {
            $data['apiClientId'] = $object->getApiClientId();
        }
        return $data;
    }
}