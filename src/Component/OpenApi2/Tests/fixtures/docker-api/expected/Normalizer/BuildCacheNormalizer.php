<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
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
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\BuildCache::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\BuildCache::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\BuildCache();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('InUse', $data) && \is_int($data['InUse'])) {
            $data['InUse'] = (bool) $data['InUse'];
        }
        if (\array_key_exists('Shared', $data) && \is_int($data['Shared'])) {
            $data['Shared'] = (bool) $data['Shared'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\BuildCacheConstraint());
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('iD') && null !== $data->getID()) {
            $dataArray['ID'] = $data->getID();
        }
        if ($data->isInitialized('parent') && null !== $data->getParent()) {
            $dataArray['Parent'] = $data->getParent();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['Type'] = $data->getType();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['Description'] = $data->getDescription();
        }
        if ($data->isInitialized('inUse') && null !== $data->getInUse()) {
            $dataArray['InUse'] = $data->getInUse();
        }
        if ($data->isInitialized('shared') && null !== $data->getShared()) {
            $dataArray['Shared'] = $data->getShared();
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['Size'] = $data->getSize();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['CreatedAt'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('lastUsedAt')) {
            $dataArray['LastUsedAt'] = $data->getLastUsedAt();
        }
        if ($data->isInitialized('usageCount') && null !== $data->getUsageCount()) {
            $dataArray['UsageCount'] = $data->getUsageCount();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\BuildCacheConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\BuildCache::class => false];
    }
}