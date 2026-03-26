<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ZoneScheduleUpgradeCreateTaskConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeCreateTaskConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeCreateTaskConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeCreateTaskConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('taskName', $data)) {
            $object->setTaskName($data['taskName']);
        }
        if (\array_key_exists('scheduleTime', $data)) {
            $object->setScheduleTime($data['scheduleTime']);
        }
        if (\array_key_exists('targetVersion', $data)) {
            $object->setTargetVersion($data['targetVersion']);
        }
        if (\array_key_exists('zoneList', $data)) {
            $values = [];
            foreach ($data['zoneList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeCreateTaskConfigZoneListItem::class, 'json', $context);
            }
            $object->setZoneList($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('taskName') && null !== $data->getTaskName()) {
            $dataArray['taskName'] = $data->getTaskName();
        }
        if ($data->isInitialized('scheduleTime') && null !== $data->getScheduleTime()) {
            $dataArray['scheduleTime'] = $data->getScheduleTime();
        }
        if ($data->isInitialized('targetVersion') && null !== $data->getTargetVersion()) {
            $dataArray['targetVersion'] = $data->getTargetVersion();
        }
        if ($data->isInitialized('zoneList') && null !== $data->getZoneList()) {
            $values = [];
            foreach ($data->getZoneList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['zoneList'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeCreateTaskConfig::class => false];
    }
}