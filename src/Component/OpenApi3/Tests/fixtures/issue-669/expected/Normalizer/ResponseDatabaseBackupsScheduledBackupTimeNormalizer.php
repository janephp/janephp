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
class ResponseDatabaseBackupsScheduledBackupTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ResponseDatabaseBackupsScheduledBackupTime::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ResponseDatabaseBackupsScheduledBackupTime::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ResponseDatabaseBackupsScheduledBackupTime();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('backup_hour', $data)) {
            $object->backupHour = $data['backup_hour'];
            unset($data['backup_hour']);
        }
        if (\array_key_exists('backup_minute', $data)) {
            $object->backupMinute = $data['backup_minute'];
            unset($data['backup_minute']);
        }
        if (\array_key_exists('backup_interval_hours', $data)) {
            $object->backupIntervalHours = $data['backup_interval_hours'];
            unset($data['backup_interval_hours']);
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
        if (array_key_exists('backupHour', get_object_vars($data)) && null !== ($data->backupHour ?? null)) {
            $dataArray['backup_hour'] = $data->backupHour ?? null;
        }
        if (array_key_exists('backupMinute', get_object_vars($data)) && null !== ($data->backupMinute ?? null)) {
            $dataArray['backup_minute'] = $data->backupMinute ?? null;
        }
        if (array_key_exists('backupIntervalHours', get_object_vars($data)) && null !== ($data->backupIntervalHours ?? null)) {
            $dataArray['backup_interval_hours'] = $data->backupIntervalHours ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ResponseDatabaseBackupsScheduledBackupTime::class => false];
    }
}