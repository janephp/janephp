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
            $object->iD = $data['ID'];
        }
        if (\array_key_exists('Parent', $data)) {
            $object->parent = $data['Parent'];
        }
        if (\array_key_exists('Type', $data)) {
            $object->type = $data['Type'];
        }
        if (\array_key_exists('Description', $data)) {
            $object->description = $data['Description'];
        }
        if (\array_key_exists('InUse', $data)) {
            $object->inUse = $data['InUse'];
        }
        if (\array_key_exists('Shared', $data)) {
            $object->shared = $data['Shared'];
        }
        if (\array_key_exists('Size', $data)) {
            $object->size = $data['Size'];
        }
        if (\array_key_exists('CreatedAt', $data)) {
            $object->createdAt = $data['CreatedAt'];
        }
        if (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] !== null) {
            $object->lastUsedAt = $data['LastUsedAt'];
        }
        elseif (\array_key_exists('LastUsedAt', $data) && $data['LastUsedAt'] === null) {
            $object->lastUsedAt = null;
        }
        if (\array_key_exists('UsageCount', $data)) {
            $object->usageCount = $data['UsageCount'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('iD', get_object_vars($data)) && null !== ($data->iD ?? null)) {
            $dataArray['ID'] = $data->iD ?? null;
        }
        if (array_key_exists('parent', get_object_vars($data)) && null !== ($data->parent ?? null)) {
            $dataArray['Parent'] = $data->parent ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['Type'] = $data->type ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['Description'] = $data->description ?? null;
        }
        if (array_key_exists('inUse', get_object_vars($data)) && null !== ($data->inUse ?? null)) {
            $dataArray['InUse'] = $data->inUse ?? null;
        }
        if (array_key_exists('shared', get_object_vars($data)) && null !== ($data->shared ?? null)) {
            $dataArray['Shared'] = $data->shared ?? null;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['Size'] = $data->size ?? null;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['CreatedAt'] = $data->createdAt ?? null;
        }
        if (array_key_exists('lastUsedAt', get_object_vars($data)) && null !== ($data->lastUsedAt ?? null)) {
            $dataArray['LastUsedAt'] = $data->lastUsedAt ?? null;
        }
        if (array_key_exists('usageCount', get_object_vars($data)) && null !== ($data->usageCount ?? null)) {
            $dataArray['UsageCount'] = $data->usageCount ?? null;
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