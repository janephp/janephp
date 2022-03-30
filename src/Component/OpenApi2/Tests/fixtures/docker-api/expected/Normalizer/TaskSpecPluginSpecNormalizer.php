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
class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\TaskSpecPluginSpec';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\TaskSpecPluginSpec';
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
        $object = new \Docker\Api\Model\TaskSpecPluginSpec();
        $validator = new \Docker\Api\Validator\TaskSpecPluginSpecValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Name', $data)) {
            $object->setName($data['Name']);
        }
        if (\array_key_exists('Remote', $data)) {
            $object->setRemote($data['Remote']);
        }
        if (\array_key_exists('Disabled', $data)) {
            $object->setDisabled($data['Disabled']);
        }
        if (\array_key_exists('PluginPrivilege', $data)) {
            $values = array();
            foreach ($data['PluginPrivilege'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\Api\\Model\\PluginPrivilege', 'json', $context);
            }
            $object->setPluginPrivilege($values);
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
        if (null !== $object->getRemote()) {
            $data['Remote'] = $object->getRemote();
        }
        if (null !== $object->getDisabled()) {
            $data['Disabled'] = $object->getDisabled();
        }
        if (null !== $object->getPluginPrivilege()) {
            $values = array();
            foreach ($object->getPluginPrivilege() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PluginPrivilege'] = $values;
        }
        $validator = new \Docker\Api\Validator\TaskSpecPluginSpecValidator();
        $validator->validate($data);
        return $data;
    }
}