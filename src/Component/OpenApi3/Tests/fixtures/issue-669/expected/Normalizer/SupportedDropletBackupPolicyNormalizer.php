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
class SupportedDropletBackupPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\SupportedDropletBackupPolicy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\SupportedDropletBackupPolicy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\SupportedDropletBackupPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('possible_window_starts', $data)) {
            $values = [];
            foreach ($data['possible_window_starts'] as $value) {
                $values[] = $value;
            }
            $object->possibleWindowStarts = $values;
            unset($data['possible_window_starts']);
        }
        if (\array_key_exists('window_length_hours', $data)) {
            $object->windowLengthHours = $data['window_length_hours'];
            unset($data['window_length_hours']);
        }
        if (\array_key_exists('retention_period_days', $data)) {
            $object->retentionPeriodDays = $data['retention_period_days'];
            unset($data['retention_period_days']);
        }
        if (\array_key_exists('possible_days', $data)) {
            $values_1 = [];
            foreach ($data['possible_days'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->possibleDays = $values_1;
            unset($data['possible_days']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('possibleWindowStarts', get_object_vars($data)) && null !== ($data->possibleWindowStarts ?? null)) {
            $values = [];
            foreach ($data->possibleWindowStarts ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['possible_window_starts'] = $values;
        }
        if (array_key_exists('windowLengthHours', get_object_vars($data)) && null !== ($data->windowLengthHours ?? null)) {
            $dataArray['window_length_hours'] = $data->windowLengthHours ?? null;
        }
        if (array_key_exists('retentionPeriodDays', get_object_vars($data)) && null !== ($data->retentionPeriodDays ?? null)) {
            $dataArray['retention_period_days'] = $data->retentionPeriodDays ?? null;
        }
        if (array_key_exists('possibleDays', get_object_vars($data)) && null !== ($data->possibleDays ?? null)) {
            $values_1 = [];
            foreach ($data->possibleDays ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['possible_days'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\SupportedDropletBackupPolicy::class => false];
    }
}