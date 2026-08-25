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
class DropletActionEnableBackupsBackupPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DropletActionEnableBackupsBackupPolicy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DropletActionEnableBackupsBackupPolicy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\DropletActionEnableBackupsBackupPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($data['plan']);
            unset($data['plan']);
        }
        if (\array_key_exists('weekday', $data)) {
            $object->setWeekday($data['weekday']);
            unset($data['weekday']);
        }
        if (\array_key_exists('hour', $data)) {
            $object->setHour($data['hour']);
            unset($data['hour']);
        }
        if (\array_key_exists('window_length_hours', $data)) {
            $object->setWindowLengthHours($data['window_length_hours']);
            unset($data['window_length_hours']);
        }
        if (\array_key_exists('retention_period_days', $data)) {
            $object->setRetentionPeriodDays($data['retention_period_days']);
            unset($data['retention_period_days']);
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
        if ($data->isInitialized('plan') && null !== $data->getPlan()) {
            $dataArray['plan'] = $data->getPlan();
        }
        if ($data->isInitialized('weekday') && null !== $data->getWeekday()) {
            $dataArray['weekday'] = $data->getWeekday();
        }
        if ($data->isInitialized('hour') && null !== $data->getHour()) {
            $dataArray['hour'] = $data->getHour();
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
        return [\Jane\Generated\DigitalOcean\Model\DropletActionEnableBackupsBackupPolicy::class => false];
    }
}