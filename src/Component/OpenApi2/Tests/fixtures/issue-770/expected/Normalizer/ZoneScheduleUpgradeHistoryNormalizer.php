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
class ZoneScheduleUpgradeHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeHistory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeHistory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeHistory();
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
        if (\array_key_exists('zoneList', $data)) {
            $values = [];
            foreach ($data['zoneList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeZone::class, 'json', $context);
            }
            $object->zoneList = $values;
        }
        if (\array_key_exists('errorLog', $data)) {
            $object->errorLog = $data['errorLog'];
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
        if (array_key_exists('zoneList', get_object_vars($data)) && null !== ($data->zoneList ?? null)) {
            $values = [];
            foreach ($data->zoneList ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['zoneList'] = $values;
        }
        if (array_key_exists('errorLog', get_object_vars($data)) && null !== ($data->errorLog ?? null)) {
            $dataArray['errorLog'] = $data->errorLog ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneScheduleUpgradeHistory::class => false];
    }
}