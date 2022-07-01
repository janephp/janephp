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
class ServiceUpdateStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\ServiceUpdateStatus';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ServiceUpdateStatus';
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
        $object = new \Docker\Api\Model\ServiceUpdateStatus();
        $validator = new \Docker\Api\Validator\ServiceUpdateStatusValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('State', $data)) {
            $object->setState($data['State']);
        }
        if (\array_key_exists('StartedAt', $data)) {
            $object->setStartedAt($data['StartedAt']);
        }
        if (\array_key_exists('CompletedAt', $data)) {
            $object->setCompletedAt($data['CompletedAt']);
        }
        if (\array_key_exists('Message', $data)) {
            $object->setMessage($data['Message']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getState()) {
            $data['State'] = $object->getState();
        }
        if (null !== $object->getStartedAt()) {
            $data['StartedAt'] = $object->getStartedAt();
        }
        if (null !== $object->getCompletedAt()) {
            $data['CompletedAt'] = $object->getCompletedAt();
        }
        if (null !== $object->getMessage()) {
            $data['Message'] = $object->getMessage();
        }
        $validator = new \Docker\Api\Validator\ServiceUpdateStatusValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}