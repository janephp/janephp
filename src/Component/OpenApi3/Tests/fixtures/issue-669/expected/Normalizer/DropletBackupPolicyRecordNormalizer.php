<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DropletBackupPolicyRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecord::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecord::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecord();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('backup_enabled', $data) && \is_int($data['backup_enabled'])) {
            $data['backup_enabled'] = (bool) $data['backup_enabled'];
        }
        if (\array_key_exists('droplet_id', $data)) {
            $object->setDropletId($data['droplet_id']);
            unset($data['droplet_id']);
        }
        if (\array_key_exists('backup_enabled', $data)) {
            $object->setBackupEnabled($data['backup_enabled']);
            unset($data['backup_enabled']);
        }
        if (\array_key_exists('backup_policy', $data)) {
            $object->setBackupPolicy($this->denormalizer->denormalize($data['backup_policy'], \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecordBackupPolicy::class, 'json', $context));
            unset($data['backup_policy']);
        }
        if (\array_key_exists('next_backup_window', $data)) {
            $object->setNextBackupWindow($this->denormalizer->denormalize($data['next_backup_window'], \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecordNextBackupWindow::class, 'json', $context));
            unset($data['next_backup_window']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dropletId') && null !== $data->getDropletId()) {
            $dataArray['droplet_id'] = $data->getDropletId();
        }
        if ($data->isInitialized('backupEnabled') && null !== $data->getBackupEnabled()) {
            $dataArray['backup_enabled'] = $data->getBackupEnabled();
        }
        if ($data->isInitialized('backupPolicy') && null !== $data->getBackupPolicy()) {
            $dataArray['backup_policy'] = $data->getBackupPolicy() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getBackupPolicy(), 'json', $context));
        }
        if ($data->isInitialized('nextBackupWindow') && null !== $data->getNextBackupWindow()) {
            $dataArray['next_backup_window'] = $data->getNextBackupWindow() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getNextBackupWindow(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecord::class => false];
    }
}