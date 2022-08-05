<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\Plugin';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\Plugin';
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
        $object = new \Docker\Api\Model\Plugin();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\PluginConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Id', $data)) {
            $object->setId($data['Id']);
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Enabled', $data)) {
            $object->setEnabled($data['Enabled']);
        }
        if (\array_key_exists('Settings', $data)) {
            $object->setSettings($this->denormalizer->denormalize($data['Settings'], 'Docker\\Api\\Model\\PluginSettings', 'json', $context));
        }
        if (\array_key_exists('PluginReference', $data)) {
            $object->setPluginReference($data['PluginReference']);
        }
        if (\array_key_exists('Config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\Api\\Model\\PluginConfig', 'json', $context));
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
        $data['Name'] = $object->getName();
        $data['Enabled'] = $object->getEnabled();
        $data['Settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        if (null !== $object->getPluginReference()) {
            $data['PluginReference'] = $object->getPluginReference();
        }
        $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\PluginConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}