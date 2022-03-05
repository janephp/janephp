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
class ServicesCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\Api\\Model\\ServicesCreatePostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ServicesCreatePostBody';
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
        $object = new \Docker\Api\Model\ServicesCreatePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Labels', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (\array_key_exists('TaskTemplate', $data)) {
            $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], 'Docker\\Api\\Model\\TaskSpec', 'json', $context));
        }
        if (\array_key_exists('Mode', $data)) {
            $object->setMode($this->denormalizer->denormalize($data['Mode'], 'Docker\\Api\\Model\\ServiceSpecMode', 'json', $context));
        }
        if (\array_key_exists('UpdateConfig', $data)) {
            $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], 'Docker\\Api\\Model\\ServiceSpecUpdateConfig', 'json', $context));
        }
        if (\array_key_exists('RollbackConfig', $data)) {
            $object->setRollbackConfig($this->denormalizer->denormalize($data['RollbackConfig'], 'Docker\\Api\\Model\\ServiceSpecRollbackConfig', 'json', $context));
        }
        if (\array_key_exists('Networks', $data)) {
            $values_1 = array();
            foreach ($data['Networks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\Api\\Model\\NetworkAttachmentConfig', 'json', $context);
            }
            $object->setNetworks($values_1);
        }
        if (\array_key_exists('EndpointSpec', $data)) {
            $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], 'Docker\\Api\\Model\\EndpointSpec', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = array();
            foreach ($object->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Labels'] = $values;
        }
        if (null !== $object->getTaskTemplate()) {
            $data['TaskTemplate'] = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
        }
        if (null !== $object->getMode()) {
            $data['Mode'] = $this->normalizer->normalize($object->getMode(), 'json', $context);
        }
        if (null !== $object->getUpdateConfig()) {
            $data['UpdateConfig'] = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
        }
        if (null !== $object->getRollbackConfig()) {
            $data['RollbackConfig'] = $this->normalizer->normalize($object->getRollbackConfig(), 'json', $context);
        }
        if (null !== $object->getNetworks()) {
            $values_1 = array();
            foreach ($object->getNetworks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Networks'] = $values_1;
        }
        if (null !== $object->getEndpointSpec()) {
            $data['EndpointSpec'] = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
        }
        return $data;
    }
}