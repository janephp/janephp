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
class MountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\Mount';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\Mount';
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
        $object = new \Docker\Api\Model\Mount();
        $validator = new \Docker\Api\Validator\MountValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Target', $data)) {
            $object->setTarget($data['Target']);
        }
        if (\array_key_exists('Source', $data)) {
            $object->setSource($data['Source']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (\array_key_exists('ReadOnly', $data)) {
            $object->setReadOnly($data['ReadOnly']);
        }
        if (\array_key_exists('Consistency', $data)) {
            $object->setConsistency($data['Consistency']);
        }
        if (\array_key_exists('BindOptions', $data)) {
            $object->setBindOptions($this->denormalizer->denormalize($data['BindOptions'], 'Docker\\Api\\Model\\MountBindOptions', 'json', $context));
        }
        if (\array_key_exists('VolumeOptions', $data)) {
            $object->setVolumeOptions($this->denormalizer->denormalize($data['VolumeOptions'], 'Docker\\Api\\Model\\MountVolumeOptions', 'json', $context));
        }
        if (\array_key_exists('TmpfsOptions', $data)) {
            $object->setTmpfsOptions($this->denormalizer->denormalize($data['TmpfsOptions'], 'Docker\\Api\\Model\\MountTmpfsOptions', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTarget()) {
            $data['Target'] = $object->getTarget();
        }
        if (null !== $object->getSource()) {
            $data['Source'] = $object->getSource();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getReadOnly()) {
            $data['ReadOnly'] = $object->getReadOnly();
        }
        if (null !== $object->getConsistency()) {
            $data['Consistency'] = $object->getConsistency();
        }
        if (null !== $object->getBindOptions()) {
            $data['BindOptions'] = $this->normalizer->normalize($object->getBindOptions(), 'json', $context);
        }
        if (null !== $object->getVolumeOptions()) {
            $data['VolumeOptions'] = $this->normalizer->normalize($object->getVolumeOptions(), 'json', $context);
        }
        if (null !== $object->getTmpfsOptions()) {
            $data['TmpfsOptions'] = $this->normalizer->normalize($object->getTmpfsOptions(), 'json', $context);
        }
        $validator = new \Docker\Api\Validator\MountValidator();
        $validator->validate($data);
        return $data;
    }
}