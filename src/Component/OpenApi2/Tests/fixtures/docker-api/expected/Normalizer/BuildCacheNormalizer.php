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
class BuildCacheNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Docker\\Api\\Model\\BuildCache';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\BuildCache';
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
        $object = new \Docker\Api\Model\BuildCache();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\BuildCacheConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ID', $data)) {
            $object->setID($data['ID']);
        }
        if (\array_key_exists('Parent', $data)) {
            $object->setParent($data['Parent']);
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (\array_key_exists('Description', $data)) {
            $object->setDescription($data['Description']);
        }
        if (\array_key_exists('InUse', $data)) {
            $object->setInUse($data['InUse']);
        }
        if (\array_key_exists('Shared', $data)) {
            $object->setShared($data['Shared']);
        }
        if (\array_key_exists('Size', $data)) {
            $object->setSize($data['Size']);
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->setCreatedAt($data['CreatedAt']);
        }
        if (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] !== null) {
            $object->setLastUsedAt($data['LastUsedAt']);
        }
        elseif (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] === null) {
            $object->setLastUsedAt(null);
        }
        if (\array_key_exists('UsageCount', $data)) {
            $object->setUsageCount($data['UsageCount']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if (null !== $object->getParent()) {
            $data['Parent'] = $object->getParent();
        }
        if (null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if (null !== $object->getDescription()) {
            $data['Description'] = $object->getDescription();
        }
        if (null !== $object->getInUse()) {
            $data['InUse'] = $object->getInUse();
        }
        if (null !== $object->getShared()) {
            $data['Shared'] = $object->getShared();
        }
        if (null !== $object->getSize()) {
            $data['Size'] = $object->getSize();
        }
        if (null !== $object->getCreatedAt()) {
            $data['CreatedAt'] = $object->getCreatedAt();
        }
        if (null !== $object->getLastUsedAt()) {
            $data['LastUsedAt'] = $object->getLastUsedAt();
        }
        if (null !== $object->getUsageCount()) {
            $data['UsageCount'] = $object->getUsageCount();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\BuildCacheConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}