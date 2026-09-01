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
            $object->company = $this->denormalizer->denormalize($data['company'], \CreditSafe\API\Model\Company::class, 'json', $context);
            unset($data['company']);
        }
        if (\array_key_exists('eventId', $data)) {
            $object->eventId = $data['eventId'];
            unset($data['eventId']);
        }
        if (\array_key_exists('eventDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['eventDate']);
            if (false === $date) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['eventDate'], 'Y-m-d\TH:i:sP');
            }
            $object->eventDate = $date;
            unset($data['eventDate']);
        }
        if (\array_key_exists('newValue', $data)) {
            $object->newValue = $data['newValue'];
            unset($data['newValue']);
        }
        if (\array_key_exists('oldValue', $data)) {
            $object->oldValue = $data['oldValue'];
            unset($data['oldValue']);
        }
        if (\array_key_exists('notificationEventId', $data)) {
            $object->notificationEventId = $data['notificationEventId'];
            unset($data['notificationEventId']);
        }
        if (\array_key_exists('ruleCode', $data)) {
            $object->ruleCode = $data['ruleCode'];
            unset($data['ruleCode']);
        }
        if (\array_key_exists('ruleName', $data)) {
            $object->ruleName = $data['ruleName'];
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
        if (array_key_exists('company', get_object_vars($data)) && null !== ($data->company ?? null)) {
            $dataArray['company'] = ($data->company ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->company ?? null, 'json', $context));
        }
        if (array_key_exists('eventId', get_object_vars($data)) && null !== ($data->eventId ?? null)) {
            $dataArray['eventId'] = $data->eventId ?? null;
        }
        if (array_key_exists('eventDate', get_object_vars($data)) && null !== ($data->eventDate ?? null)) {
            $dataArray['eventDate'] = ($data->eventDate ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('newValue', get_object_vars($data)) && null !== ($data->newValue ?? null)) {
            $dataArray['newValue'] = $data->newValue ?? null;
        }
        if (array_key_exists('oldValue', get_object_vars($data)) && null !== ($data->oldValue ?? null)) {
            $dataArray['oldValue'] = $data->oldValue ?? null;
        }
        if (array_key_exists('notificationEventId', get_object_vars($data)) && null !== ($data->notificationEventId ?? null)) {
            $dataArray['notificationEventId'] = $data->notificationEventId ?? null;
        }
        if (array_key_exists('ruleCode', get_object_vars($data)) && null !== ($data->ruleCode ?? null)) {
            $dataArray['ruleCode'] = $data->ruleCode ?? null;
        }
        if (array_key_exists('ruleName', get_object_vars($data)) && null !== ($data->ruleName ?? null)) {
            $dataArray['ruleName'] = $data->ruleName ?? null;
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
        return [\CreditSafe\API\Model\NotificationEvent::class => false];
    }
}