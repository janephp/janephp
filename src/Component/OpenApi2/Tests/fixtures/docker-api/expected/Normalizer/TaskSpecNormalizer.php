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
class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\Api\\Model\\TaskSpec';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\TaskSpec';
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
        $object = new \Docker\Api\Model\TaskSpec();
        $validator = new \Docker\Api\Validator\TaskSpecValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('PluginSpec', $data)) {
            $object->setPluginSpec($this->denormalizer->denormalize($data['PluginSpec'], 'Docker\\Api\\Model\\TaskSpecPluginSpec', 'json', $context));
        }
        if (\array_key_exists('ContainerSpec', $data)) {
            $object->setContainerSpec($this->denormalizer->denormalize($data['ContainerSpec'], 'Docker\\Api\\Model\\TaskSpecContainerSpec', 'json', $context));
        }
        if (\array_key_exists('NetworkAttachmentSpec', $data)) {
            $object->setNetworkAttachmentSpec($this->denormalizer->denormalize($data['NetworkAttachmentSpec'], 'Docker\\Api\\Model\\TaskSpecNetworkAttachmentSpec', 'json', $context));
        }
        if (\array_key_exists('Resources', $data)) {
            $object->setResources($this->denormalizer->denormalize($data['Resources'], 'Docker\\Api\\Model\\TaskSpecResources', 'json', $context));
        }
        if (\array_key_exists('RestartPolicy', $data)) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], 'Docker\\Api\\Model\\TaskSpecRestartPolicy', 'json', $context));
        }
        if (\array_key_exists('Placement', $data)) {
            $object->setPlacement($this->denormalizer->denormalize($data['Placement'], 'Docker\\Api\\Model\\TaskSpecPlacement', 'json', $context));
        }
        if (\array_key_exists('ForceUpdate', $data)) {
            $object->setForceUpdate($data['ForceUpdate']);
        }
        if (\array_key_exists('Runtime', $data)) {
            $object->setRuntime($data['Runtime']);
        }
        if (\array_key_exists('Networks', $data)) {
            $values = array();
            foreach ($data['Networks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\NetworkAttachmentConfig', 'json', $context);
            }
            $object->setNetworks($values);
        }
        if (\array_key_exists('LogDriver', $data)) {
            $object->setLogDriver($this->denormalizer->denormalize($data['LogDriver'], 'Docker\\Api\\Model\\TaskSpecLogDriver', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPluginSpec()) {
            $data['PluginSpec'] = $this->normalizer->normalize($object->getPluginSpec(), 'json', $context);
        }
        if (null !== $object->getContainerSpec()) {
            $data['ContainerSpec'] = $this->normalizer->normalize($object->getContainerSpec(), 'json', $context);
        }
        if (null !== $object->getNetworkAttachmentSpec()) {
            $data['NetworkAttachmentSpec'] = $this->normalizer->normalize($object->getNetworkAttachmentSpec(), 'json', $context);
        }
        if (null !== $object->getResources()) {
            $data['Resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }
        if (null !== $object->getRestartPolicy()) {
            $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if (null !== $object->getPlacement()) {
            $data['Placement'] = $this->normalizer->normalize($object->getPlacement(), 'json', $context);
        }
        if (null !== $object->getForceUpdate()) {
            $data['ForceUpdate'] = $object->getForceUpdate();
        }
        if (null !== $object->getRuntime()) {
            $data['Runtime'] = $object->getRuntime();
        }
        if (null !== $object->getNetworks()) {
            $values = array();
            foreach ($object->getNetworks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Networks'] = $values;
        }
        if (null !== $object->getLogDriver()) {
            $data['LogDriver'] = $this->normalizer->normalize($object->getLogDriver(), 'json', $context);
        }
        $validator = new \Docker\Api\Validator\TaskSpecValidator();
        $validator->validate($data);
        return $data;
    }
}