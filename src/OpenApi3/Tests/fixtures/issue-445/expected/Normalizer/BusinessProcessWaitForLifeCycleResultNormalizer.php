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
class BusinessProcessWaitForLifeCycleResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\BusinessProcessWaitForLifeCycleResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessProcessWaitForLifeCycleResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessProcessWaitForLifeCycleResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lifeCycleHit', $data) && $data['lifeCycleHit'] !== null) {
            $object->setLifeCycleHit($data['lifeCycleHit']);
        }
        elseif (\array_key_exists('lifeCycleHit', $data) && $data['lifeCycleHit'] === null) {
            $object->setLifeCycleHit(null);
        }
        if (\array_key_exists('businessProcess', $data)) {
            $object->setBusinessProcess($data['businessProcess']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLifeCycleHit()) {
            $data['lifeCycleHit'] = $object->getLifeCycleHit();
        }
        $data['businessProcess'] = $object->getBusinessProcess();
        return $data;
    }
}