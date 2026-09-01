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
class AlarmListSingleAlarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AlarmListSingleAlarm::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AlarmListSingleAlarm::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AlarmListSingleAlarm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ackTime', $data)) {
            $object->ackTime = $data['ackTime'];
        }
        if (\array_key_exists('ackUser', $data)) {
            $object->ackUser = $data['ackUser'];
        }
        if (\array_key_exists('acknowledged', $data)) {
            $object->acknowledged = $data['acknowledged'];
        }
        if (\array_key_exists('activity', $data)) {
            $object->activity = $data['activity'];
        }
        if (\array_key_exists('alarmCode', $data)) {
            $object->alarmCode = $data['alarmCode'];
        }
        if (\array_key_exists('alarmState', $data)) {
            $object->alarmState = $data['alarmState'];
        }
        if (\array_key_exists('alarmType', $data)) {
            $object->alarmType = $data['alarmType'];
        }
        if (\array_key_exists('category', $data)) {
            $object->category = $data['category'];
        }
        if (\array_key_exists('clearComment', $data)) {
            $object->clearComment = $data['clearComment'];
        }
        if (\array_key_exists('clearTime', $data)) {
            $object->clearTime = $data['clearTime'];
        }
        if (\array_key_exists('clearUser', $data)) {
            $object->clearUser = $data['clearUser'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('insertionTime', $data)) {
            $object->insertionTime = $data['insertionTime'];
        }
        if (\array_key_exists('severity', $data)) {
            $object->severity = $data['severity'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ackTime', get_object_vars($data)) && null !== ($data->ackTime ?? null)) {
            $dataArray['ackTime'] = $data->ackTime ?? null;
        }
        if (array_key_exists('ackUser', get_object_vars($data)) && null !== ($data->ackUser ?? null)) {
            $dataArray['ackUser'] = $data->ackUser ?? null;
        }
        if (array_key_exists('acknowledged', get_object_vars($data)) && null !== ($data->acknowledged ?? null)) {
            $dataArray['acknowledged'] = $data->acknowledged ?? null;
        }
        if (array_key_exists('activity', get_object_vars($data)) && null !== ($data->activity ?? null)) {
            $dataArray['activity'] = $data->activity ?? null;
        }
        if (array_key_exists('alarmCode', get_object_vars($data)) && null !== ($data->alarmCode ?? null)) {
            $dataArray['alarmCode'] = $data->alarmCode ?? null;
        }
        if (array_key_exists('alarmState', get_object_vars($data)) && null !== ($data->alarmState ?? null)) {
            $dataArray['alarmState'] = $data->alarmState ?? null;
        }
        if (array_key_exists('alarmType', get_object_vars($data)) && null !== ($data->alarmType ?? null)) {
            $dataArray['alarmType'] = $data->alarmType ?? null;
        }
        if (array_key_exists('category', get_object_vars($data)) && null !== ($data->category ?? null)) {
            $dataArray['category'] = $data->category ?? null;
        }
        if (array_key_exists('clearComment', get_object_vars($data)) && null !== ($data->clearComment ?? null)) {
            $dataArray['clearComment'] = $data->clearComment ?? null;
        }
        if (array_key_exists('clearTime', get_object_vars($data)) && null !== ($data->clearTime ?? null)) {
            $dataArray['clearTime'] = $data->clearTime ?? null;
        }
        if (array_key_exists('clearUser', get_object_vars($data)) && null !== ($data->clearUser ?? null)) {
            $dataArray['clearUser'] = $data->clearUser ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('insertionTime', get_object_vars($data)) && null !== ($data->insertionTime ?? null)) {
            $dataArray['insertionTime'] = $data->insertionTime ?? null;
        }
        if (array_key_exists('severity', get_object_vars($data)) && null !== ($data->severity ?? null)) {
            $dataArray['severity'] = $data->severity ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AlarmListSingleAlarm::class => false];
    }
}