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
class DropletCreateBackupPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DropletCreateBackupPolicy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DropletCreateBackupPolicy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\DropletCreateBackupPolicy();
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
            $object->plan = $data['plan'];
            unset($data['plan']);
        }
        if (\array_key_exists('weekday', $data)) {
            $object->weekday = $data['weekday'];
            unset($data['weekday']);
        }
        if (\array_key_exists('hour', $data)) {
            $object->hour = $data['hour'];
            unset($data['hour']);
        }
        if (\array_key_exists('window_length_hours', $data)) {
            $object->windowLengthHours = $data['window_length_hours'];
            unset($data['window_length_hours']);
        }
        if (\array_key_exists('retention_period_days', $data)) {
            $object->retentionPeriodDays = $data['retention_period_days'];
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
        if (array_key_exists('plan', get_object_vars($data)) && null !== ($data->plan ?? null)) {
            $dataArray['plan'] = $data->plan ?? null;
        }
        if (array_key_exists('weekday', get_object_vars($data)) && null !== ($data->weekday ?? null)) {
            $dataArray['weekday'] = $data->weekday ?? null;
        }
        if (array_key_exists('hour', get_object_vars($data)) && null !== ($data->hour ?? null)) {
            $dataArray['hour'] = $data->hour ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\DropletCreateBackupPolicy::class => false];
    }
}