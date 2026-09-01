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
class SwarmSpecRaftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SwarmSpecRaft::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SwarmSpecRaft::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SwarmSpecRaft();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmSpecRaftConstraint());
        }
        if (\array_key_exists('SnapshotInterval', $data)) {
            $object->snapshotInterval = $data['SnapshotInterval'];
        }
        if (\array_key_exists('KeepOldSnapshots', $data)) {
            $object->keepOldSnapshots = $data['KeepOldSnapshots'];
        }
        if (\array_key_exists('LogEntriesForSlowFollowers', $data)) {
            $object->logEntriesForSlowFollowers = $data['LogEntriesForSlowFollowers'];
        }
        if (\array_key_exists('ElectionTick', $data)) {
            $object->electionTick = $data['ElectionTick'];
        }
        if (\array_key_exists('HeartbeatTick', $data)) {
            $object->heartbeatTick = $data['HeartbeatTick'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('snapshotInterval', get_object_vars($data)) && null !== ($data->snapshotInterval ?? null)) {
            $dataArray['SnapshotInterval'] = $data->snapshotInterval ?? null;
        }
        if (array_key_exists('keepOldSnapshots', get_object_vars($data)) && null !== ($data->keepOldSnapshots ?? null)) {
            $dataArray['KeepOldSnapshots'] = $data->keepOldSnapshots ?? null;
        }
        if (array_key_exists('logEntriesForSlowFollowers', get_object_vars($data)) && null !== ($data->logEntriesForSlowFollowers ?? null)) {
            $dataArray['LogEntriesForSlowFollowers'] = $data->logEntriesForSlowFollowers ?? null;
        }
        if (array_key_exists('electionTick', get_object_vars($data)) && null !== ($data->electionTick ?? null)) {
            $dataArray['ElectionTick'] = $data->electionTick ?? null;
        }
        if (array_key_exists('heartbeatTick', get_object_vars($data)) && null !== ($data->heartbeatTick ?? null)) {
            $dataArray['HeartbeatTick'] = $data->heartbeatTick ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SwarmSpecRaftConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SwarmSpecRaft::class => false];
    }
}