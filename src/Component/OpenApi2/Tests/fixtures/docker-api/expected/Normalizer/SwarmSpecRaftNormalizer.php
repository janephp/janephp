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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\SwarmSpecRaft();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SwarmSpecRaftConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('SnapshotInterval', $data)) {
            $object->setSnapshotInterval($data['SnapshotInterval']);
        }
        if (\array_key_exists('KeepOldSnapshots', $data)) {
            $object->setKeepOldSnapshots($data['KeepOldSnapshots']);
        }
        if (\array_key_exists('LogEntriesForSlowFollowers', $data)) {
            $object->setLogEntriesForSlowFollowers($data['LogEntriesForSlowFollowers']);
        }
        if (\array_key_exists('ElectionTick', $data)) {
            $object->setElectionTick($data['ElectionTick']);
        }
        if (\array_key_exists('HeartbeatTick', $data)) {
            $object->setHeartbeatTick($data['HeartbeatTick']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('snapshotInterval') && null !== $data->getSnapshotInterval()) {
            $dataArray['SnapshotInterval'] = $data->getSnapshotInterval();
        }
        if ($data->isInitialized('keepOldSnapshots') && null !== $data->getKeepOldSnapshots()) {
            $dataArray['KeepOldSnapshots'] = $data->getKeepOldSnapshots();
        }
        if ($data->isInitialized('logEntriesForSlowFollowers') && null !== $data->getLogEntriesForSlowFollowers()) {
            $dataArray['LogEntriesForSlowFollowers'] = $data->getLogEntriesForSlowFollowers();
        }
        if ($data->isInitialized('electionTick') && null !== $data->getElectionTick()) {
            $dataArray['ElectionTick'] = $data->getElectionTick();
        }
        if ($data->isInitialized('heartbeatTick') && null !== $data->getHeartbeatTick()) {
            $dataArray['HeartbeatTick'] = $data->getHeartbeatTick();
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