<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ZoneScheduleUpgradeTaskConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeTaskConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeTaskConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeTaskConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('taskName', $data)) {
            $object->taskName = $data['taskName'];
        }
        if (\array_key_exists('scheduleTime', $data)) {
            $object->scheduleTime = $data['scheduleTime'];
        }
        if (\array_key_exists('targetVersion', $data)) {
            $object->targetVersion = $data['targetVersion'];
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
        }
        if (\array_key_exists('zoneList', $data)) {
            $values = [];
            foreach ($data['zoneList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeZone::class, 'json', $context);
            }
            $object->zoneList = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('taskName', get_object_vars($data)) && null !== ($data->taskName ?? null)) {
            $dataArray['taskName'] = $data->taskName ?? null;
        }
        if (array_key_exists('scheduleTime', get_object_vars($data)) && null !== ($data->scheduleTime ?? null)) {
            $dataArray['scheduleTime'] = $data->scheduleTime ?? null;
        }
        if (array_key_exists('targetVersion', get_object_vars($data)) && null !== ($data->targetVersion ?? null)) {
            $dataArray['targetVersion'] = $data->targetVersion ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('zoneList', get_object_vars($data)) && null !== ($data->zoneList ?? null)) {
            $values = [];
            foreach ($data->zoneList ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['zoneList'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneScheduleUpgradeTaskConfig::class => false];
    }
}