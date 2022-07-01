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
class EventMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\EventMessage';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\EventMessage';
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
        $object = new \Docker\Api\Model\EventMessage();
        $validator = new \Docker\Api\Validator\EventMessageValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (\array_key_exists('Action', $data)) {
            $object->setAction($data['Action']);
        }
        if (\array_key_exists('Actor', $data)) {
            $object->setActor($this->denormalizer->denormalize($data['Actor'], 'Docker\\Api\\Model\\EventActor', 'json', $context));
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($data['scope']);
        }
        if (\array_key_exists('time', $data)) {
            $object->setTime($data['time']);
        }
        if (\array_key_exists('timeNano', $data)) {
            $object->setTimeNano($data['timeNano']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getAction()) {
            $data['Action'] = $object->getAction();
        }
        if (null !== $object->getActor()) {
            $data['Actor'] = $this->normalizer->normalize($object->getActor(), 'json', $context);
        }
        if (null !== $object->getScope()) {
            $data['scope'] = $object->getScope();
        }
        if (null !== $object->getTime()) {
            $data['time'] = $object->getTime();
        }
        if (null !== $object->getTimeNano()) {
            $data['timeNano'] = $object->getTimeNano();
        }
        $validator = new \Docker\Api\Validator\EventMessageValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}