<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NotificationEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\NotificationEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\NotificationEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\NotificationEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('eventId', $data) && \is_int($data['eventId'])) {
            $data['eventId'] = (float) $data['eventId'];
        }
        if (\array_key_exists('notificationEventId', $data) && \is_int($data['notificationEventId'])) {
            $data['notificationEventId'] = (float) $data['notificationEventId'];
        }
        if (\array_key_exists('ruleCode', $data) && \is_int($data['ruleCode'])) {
            $data['ruleCode'] = (float) $data['ruleCode'];
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], \CreditSafe\API\Model\Company::class, 'json', $context));
            unset($data['company']);
        }
        if (\array_key_exists('eventId', $data)) {
            $object->setEventId($data['eventId']);
            unset($data['eventId']);
        }
        if (\array_key_exists('eventDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['eventDate']);
            if (false === $date) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['eventDate'], 'Y-m-d\TH:i:sP');
            }
            $object->setEventDate($date);
            unset($data['eventDate']);
        }
        if (\array_key_exists('newValue', $data)) {
            $object->setNewValue($data['newValue']);
            unset($data['newValue']);
        }
        if (\array_key_exists('oldValue', $data)) {
            $object->setOldValue($data['oldValue']);
            unset($data['oldValue']);
        }
        if (\array_key_exists('notificationEventId', $data)) {
            $object->setNotificationEventId($data['notificationEventId']);
            unset($data['notificationEventId']);
        }
        if (\array_key_exists('ruleCode', $data)) {
            $object->setRuleCode($data['ruleCode']);
            unset($data['ruleCode']);
        }
        if (\array_key_exists('ruleName', $data)) {
            $object->setRuleName($data['ruleName']);
            unset($data['ruleName']);
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
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getCompany(), 'json', $context));
        }
        if ($data->isInitialized('eventId') && null !== $data->getEventId()) {
            $dataArray['eventId'] = $data->getEventId();
        }
        if ($data->isInitialized('eventDate') && null !== $data->getEventDate()) {
            $dataArray['eventDate'] = $data->getEventDate()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('newValue') && null !== $data->getNewValue()) {
            $dataArray['newValue'] = $data->getNewValue();
        }
        if ($data->isInitialized('oldValue') && null !== $data->getOldValue()) {
            $dataArray['oldValue'] = $data->getOldValue();
        }
        if ($data->isInitialized('notificationEventId') && null !== $data->getNotificationEventId()) {
            $dataArray['notificationEventId'] = $data->getNotificationEventId();
        }
        if ($data->isInitialized('ruleCode') && null !== $data->getRuleCode()) {
            $dataArray['ruleCode'] = $data->getRuleCode();
        }
        if ($data->isInitialized('ruleName') && null !== $data->getRuleName()) {
            $dataArray['ruleName'] = $data->getRuleName();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\NotificationEvent::class => false];
    }
}