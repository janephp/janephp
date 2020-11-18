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
class BusinessProcessEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\BusinessProcessEvent';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessProcessEvent';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessProcessEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] !== null) {
            $object->setBusinessProcessId($data['businessProcessId']);
        }
        elseif (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] === null) {
            $object->setBusinessProcessId(null);
        }
        if (\array_key_exists('lifeCycle', $data) && $data['lifeCycle'] !== null) {
            $object->setLifeCycle($data['lifeCycle']);
        }
        elseif (\array_key_exists('lifeCycle', $data) && $data['lifeCycle'] === null) {
            $object->setLifeCycle(null);
        }
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->setState($data['state']);
        }
        elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->setState(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
        $data['kind'] = $object->getKind();
        if (null !== $object->getBusinessProcessId()) {
            $data['businessProcessId'] = $object->getBusinessProcessId();
        }
        if (null !== $object->getLifeCycle()) {
            $data['lifeCycle'] = $object->getLifeCycle();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        return $data;
    }
}