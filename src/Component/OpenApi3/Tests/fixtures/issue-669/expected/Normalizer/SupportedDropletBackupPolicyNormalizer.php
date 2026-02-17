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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\SupportedDropletBackupPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('possible_window_starts', $data)) {
            $values = [];
            foreach ($data['possible_window_starts'] as $value) {
                $values[] = $value;
            }
            $object->setPossibleWindowStarts($values);
            unset($data['possible_window_starts']);
        }
        if (\array_key_exists('window_length_hours', $data)) {
            $object->setWindowLengthHours($data['window_length_hours']);
            unset($data['window_length_hours']);
        }
        if (\array_key_exists('retention_period_days', $data)) {
            $object->setRetentionPeriodDays($data['retention_period_days']);
            unset($data['retention_period_days']);
        }
        if (\array_key_exists('possible_days', $data)) {
            $values_1 = [];
            foreach ($data['possible_days'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPossibleDays($values_1);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('possibleWindowStarts') && null !== $data->getPossibleWindowStarts()) {
            $values = [];
            foreach ($data->getPossibleWindowStarts() as $value) {
                $values[] = $value;
            }
            $dataArray['possible_window_starts'] = $values;
        }
        if ($data->isInitialized('windowLengthHours') && null !== $data->getWindowLengthHours()) {
            $dataArray['window_length_hours'] = $data->getWindowLengthHours();
        }
        if ($data->isInitialized('retentionPeriodDays') && null !== $data->getRetentionPeriodDays()) {
            $dataArray['retention_period_days'] = $data->getRetentionPeriodDays();
        }
        if ($data->isInitialized('possibleDays') && null !== $data->getPossibleDays()) {
            $values_1 = [];
            foreach ($data->getPossibleDays() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['possible_days'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
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