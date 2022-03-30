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
class ContainerSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\ContainerSummary';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\ContainerSummary';
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
        $object = new \Docker\Api\Model\ContainerSummary();
        $validator = new \Docker\Api\Validator\ContainerSummaryValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
        }
        if (\array_key_exists('Names', $data)) {
            $values = array();
            foreach ($data['Names'] as $value) {
                $values[] = $value;
            }
            $object->setNames($values);
        }
        if (\array_key_exists('Image', $data)) {
            $object->setImage($data['Image']);
        }
        if (\array_key_exists('ImageID', $data)) {
            $object->setImageID($data['ImageID']);
        }
        if (\array_key_exists('Command', $data)) {
            $object->setCommand($data['Command']);
        }
        if (\array_key_exists('Created', $data)) {
            $object->setCreated($data['Created']);
        }
        if (\array_key_exists('Ports', $data)) {
            $values_1 = array();
            foreach ($data['Ports'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\Api\\Model\\Port', 'json', $context);
            }
            $object->setPorts($values_1);
        }
        if (\array_key_exists('SizeRw', $data)) {
            $object->setSizeRw($data['SizeRw']);
        }
        if (\array_key_exists('SizeRootFs', $data)) {
            $object->setSizeRootFs($data['SizeRootFs']);
        }
        if (\array_key_exists('Labels', $data)) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setLabels($values_2);
        }
        if (\array_key_exists('State', $data)) {
            $object->setState($data['State']);
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($data['Status']);
        }
        if (\array_key_exists('HostConfig', $data)) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], 'Docker\\Api\\Model\\ContainerSummaryHostConfig', 'json', $context));
        }
        if (\array_key_exists('NetworkSettings', $data)) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], 'Docker\\Api\\Model\\ContainerSummaryNetworkSettings', 'json', $context));
        }
        if (\array_key_exists('Mounts', $data)) {
            $values_3 = array();
            foreach ($data['Mounts'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\Api\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_3);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if (null !== $object->getNames()) {
            $values = array();
            foreach ($object->getNames() as $value) {
                $values[] = $value;
            }
            $data['Names'] = $values;
        }
        if (null !== $object->getImage()) {
            $data['Image'] = $object->getImage();
        }
        if (null !== $object->getImageID()) {
            $data['ImageID'] = $object->getImageID();
        }
        if (null !== $object->getCommand()) {
            $data['Command'] = $object->getCommand();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getPorts()) {
            $values_1 = array();
            foreach ($object->getPorts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Ports'] = $values_1;
        }
        if (null !== $object->getSizeRw()) {
            $data['SizeRw'] = $object->getSizeRw();
        }
        if (null !== $object->getSizeRootFs()) {
            $data['SizeRootFs'] = $object->getSizeRootFs();
        }
        if (null !== $object->getLabels()) {
            $values_2 = array();
            foreach ($object->getLabels() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $data['Labels'] = $values_2;
        }
        if (null !== $object->getState()) {
            $data['State'] = $object->getState();
        }
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getHostConfig()) {
            $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkSettings()) {
            $data['NetworkSettings'] = $this->normalizer->normalize($object->getNetworkSettings(), 'json', $context);
        }
        if (null !== $object->getMounts()) {
            $values_3 = array();
            foreach ($object->getMounts() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['Mounts'] = $values_3;
        }
        $validator = new \Docker\Api\Validator\ContainerSummaryValidator();
        $validator->validate($data);
        return $data;
    }
}