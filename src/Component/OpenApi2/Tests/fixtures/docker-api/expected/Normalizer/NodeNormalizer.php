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
class NodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Docker\\Api\\Model\\Node';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\Node';
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
        $object = new \Docker\Api\Model\Node();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\NodeConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
        }
        if (\array_key_exists('Version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['Version'], 'Docker\\Api\\Model\\ObjectVersion', 'json', $context));
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->setCreatedAt($data['CreatedAt']);
        }
        if (\array_key_exists('UpdatedAt', $data)) {
            $object->setUpdatedAt($data['UpdatedAt']);
        }
        if (\array_key_exists('Spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Docker\\Api\\Model\\NodeSpec', 'json', $context));
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($this->denormalizer->denormalize($data['Description'], 'Docker\\Api\\Model\\NodeDescription', 'json', $context));
        }
        if (\array_key_exists('Status', $data)) {
            $object->setStatus($this->denormalizer->denormalize($data['Status'], 'Docker\\Api\\Model\\NodeStatus', 'json', $context));
        }
        if (\array_key_exists('ManagerStatus', $data) && $data['ManagerStatus'] !== null) {
            $object->setManagerStatus($this->denormalizer->denormalize($data['ManagerStatus'], 'Docker\\Api\\Model\\ManagerStatus', 'json', $context));
        }
        elseif (\array_key_exists('ManagerStatus', $data) && $data['ManagerStatus'] === null) {
            $object->setManagerStatus(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('iD') && null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if ($object->isInitialized('version') && null !== $object->getVersion()) {
            $data['Version'] = $object->getVersion() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getVersion(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['CreatedAt'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['UpdatedAt'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('spec') && null !== $object->getSpec()) {
            $data['Spec'] = $object->getSpec() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getSpec(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getDescription(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getStatus(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('managerStatus') && null !== $object->getManagerStatus()) {
            $data['ManagerStatus'] = $object->getManagerStatus() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getManagerStatus(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\NodeConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Docker\\Api\\Model\\Node' => false);
    }
}