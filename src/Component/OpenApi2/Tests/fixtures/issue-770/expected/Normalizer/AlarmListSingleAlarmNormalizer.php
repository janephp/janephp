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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AlarmListSingleAlarm();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ackTime', $data)) {
            $object->setAckTime($data['ackTime']);
        }
        if (\array_key_exists('ackUser', $data)) {
            $object->setAckUser($data['ackUser']);
        }
        if (\array_key_exists('acknowledged', $data)) {
            $object->setAcknowledged($data['acknowledged']);
        }
        if (\array_key_exists('activity', $data)) {
            $object->setActivity($data['activity']);
        }
        if (\array_key_exists('alarmCode', $data)) {
            $object->setAlarmCode($data['alarmCode']);
        }
        if (\array_key_exists('alarmState', $data)) {
            $object->setAlarmState($data['alarmState']);
        }
        if (\array_key_exists('alarmType', $data)) {
            $object->setAlarmType($data['alarmType']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($data['category']);
        }
        if (\array_key_exists('clearComment', $data)) {
            $object->setClearComment($data['clearComment']);
        }
        if (\array_key_exists('clearTime', $data)) {
            $object->setClearTime($data['clearTime']);
        }
        if (\array_key_exists('clearUser', $data)) {
            $object->setClearUser($data['clearUser']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('insertionTime', $data)) {
            $object->setInsertionTime($data['insertionTime']);
        }
        if (\array_key_exists('severity', $data)) {
            $object->setSeverity($data['severity']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ackTime') && null !== $data->getAckTime()) {
            $dataArray['ackTime'] = $data->getAckTime();
        }
        if ($data->isInitialized('ackUser') && null !== $data->getAckUser()) {
            $dataArray['ackUser'] = $data->getAckUser();
        }
        if ($data->isInitialized('acknowledged') && null !== $data->getAcknowledged()) {
            $dataArray['acknowledged'] = $data->getAcknowledged();
        }
        if ($data->isInitialized('activity') && null !== $data->getActivity()) {
            $dataArray['activity'] = $data->getActivity();
        }
        if ($data->isInitialized('alarmCode') && null !== $data->getAlarmCode()) {
            $dataArray['alarmCode'] = $data->getAlarmCode();
        }
        if ($data->isInitialized('alarmState') && null !== $data->getAlarmState()) {
            $dataArray['alarmState'] = $data->getAlarmState();
        }
        if ($data->isInitialized('alarmType') && null !== $data->getAlarmType()) {
            $dataArray['alarmType'] = $data->getAlarmType();
        }
        if ($data->isInitialized('category') && null !== $data->getCategory()) {
            $dataArray['category'] = $data->getCategory();
        }
        if ($data->isInitialized('clearComment') && null !== $data->getClearComment()) {
            $dataArray['clearComment'] = $data->getClearComment();
        }
        if ($data->isInitialized('clearTime') && null !== $data->getClearTime()) {
            $dataArray['clearTime'] = $data->getClearTime();
        }
        if ($data->isInitialized('clearUser') && null !== $data->getClearUser()) {
            $dataArray['clearUser'] = $data->getClearUser();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('insertionTime') && null !== $data->getInsertionTime()) {
            $dataArray['insertionTime'] = $data->getInsertionTime();
        }
        if ($data->isInitialized('severity') && null !== $data->getSeverity()) {
            $dataArray['severity'] = $data->getSeverity();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AlarmListSingleAlarm::class => false];
    }
}