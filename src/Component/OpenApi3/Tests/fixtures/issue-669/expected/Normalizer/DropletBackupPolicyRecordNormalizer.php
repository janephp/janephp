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
            $object->dropletId = $data['droplet_id'];
            unset($data['droplet_id']);
        }
        if (\array_key_exists('backup_enabled', $data)) {
            $object->backupEnabled = $data['backup_enabled'];
            unset($data['backup_enabled']);
        }
        if (\array_key_exists('backup_policy', $data)) {
            $object->backupPolicy = $this->denormalizer->denormalize($data['backup_policy'], \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecordBackupPolicy::class, 'json', $context);
            unset($data['backup_policy']);
        }
        if (\array_key_exists('next_backup_window', $data)) {
            $object->nextBackupWindow = $this->denormalizer->denormalize($data['next_backup_window'], \Jane\Generated\DigitalOcean\Model\DropletBackupPolicyRecordNextBackupWindow::class, 'json', $context);
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
        if (array_key_exists('dropletId', get_object_vars($data)) && null !== ($data->dropletId ?? null)) {
            $dataArray['droplet_id'] = $data->dropletId ?? null;
        }
        if (array_key_exists('backupEnabled', get_object_vars($data)) && null !== ($data->backupEnabled ?? null)) {
            $dataArray['backup_enabled'] = $data->backupEnabled ?? null;
        }
        if (array_key_exists('backupPolicy', get_object_vars($data)) && null !== ($data->backupPolicy ?? null)) {
            $dataArray['backup_policy'] = ($data->backupPolicy ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->backupPolicy ?? null, 'json', $context));
        }
        if (array_key_exists('nextBackupWindow', get_object_vars($data)) && null !== ($data->nextBackupWindow ?? null)) {
            $dataArray['next_backup_window'] = ($data->nextBackupWindow ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->nextBackupWindow ?? null, 'json', $context));
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