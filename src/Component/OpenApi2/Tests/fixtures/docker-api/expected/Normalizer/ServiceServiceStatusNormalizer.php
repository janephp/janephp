<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ServiceServiceStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\Api\\Model\\ServiceServiceStatus';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ServiceServiceStatus';
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
        $object = new \Docker\Api\Model\ServiceServiceStatus();
        $validator = new \Docker\Api\Validator\ServiceServiceStatusValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('RunningTasks', $data)) {
            $object->setRunningTasks($data['RunningTasks']);
        }
        if (\array_key_exists('DesiredTasks', $data)) {
            $object->setDesiredTasks($data['DesiredTasks']);
        }
        if (\array_key_exists('CompletedTasks', $data)) {
            $object->setCompletedTasks($data['CompletedTasks']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRunningTasks()) {
            $data['RunningTasks'] = $object->getRunningTasks();
        }
        if (null !== $object->getDesiredTasks()) {
            $data['DesiredTasks'] = $object->getDesiredTasks();
        }
        if (null !== $object->getCompletedTasks()) {
            $data['CompletedTasks'] = $object->getCompletedTasks();
        }
        $validator = new \Docker\Api\Validator\ServiceServiceStatusValidator();
        $validator->validate($data);
        return $data;
    }
}