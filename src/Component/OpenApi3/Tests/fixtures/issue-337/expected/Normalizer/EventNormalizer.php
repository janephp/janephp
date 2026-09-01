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
class EventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\Event::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\Event::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\Event();
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
        if (\array_key_exists('companyId', $data) && \is_int($data['companyId'])) {
            $data['companyId'] = (float) $data['companyId'];
        }
        if (\array_key_exists('portfolioId', $data) && \is_int($data['portfolioId'])) {
            $data['portfolioId'] = (float) $data['portfolioId'];
        }
        if (\array_key_exists('eventId', $data)) {
            $object->eventId = $data['eventId'];
            unset($data['eventId']);
        }
        if (\array_key_exists('companyId', $data)) {
            $object->companyId = $data['companyId'];
            unset($data['companyId']);
        }
        if (\array_key_exists('portfolioId', $data)) {
            $object->portfolioId = $data['portfolioId'];
            unset($data['portfolioId']);
        }
        if (\array_key_exists('ruleName', $data)) {
            $object->ruleName = $data['ruleName'];
            unset($data['ruleName']);
        }
        if (\array_key_exists('localEventCode', $data)) {
            $object->localEventCode = $data['localEventCode'];
            unset($data['localEventCode']);
        }
        if (\array_key_exists('globalEventCode', $data)) {
            $object->globalEventCode = $data['globalEventCode'];
            unset($data['globalEventCode']);
        }
        if (\array_key_exists('newValue', $data)) {
            $object->newValue = $data['newValue'];
            unset($data['newValue']);
        }
        if (\array_key_exists('oldValue', $data)) {
            $object->oldValue = $data['oldValue'];
            unset($data['oldValue']);
        }
        if (\array_key_exists('eventDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['eventDate']);
            if (false === $date) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['eventDate'], 'Y-m-d\TH:i:sP');
            }
            $object->eventDate = $date;
            unset($data['eventDate']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdDate']);
            if (false === $date_1) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['createdDate'], 'Y-m-d\TH:i:sP');
            }
            $object->createdDate = $date_1;
            unset($data['createdDate']);
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
        if (array_key_exists('eventId', get_object_vars($data)) && null !== ($data->eventId ?? null)) {
            $dataArray['eventId'] = $data->eventId ?? null;
        }
        if (array_key_exists('companyId', get_object_vars($data)) && null !== ($data->companyId ?? null)) {
            $dataArray['companyId'] = $data->companyId ?? null;
        }
        if (array_key_exists('portfolioId', get_object_vars($data)) && null !== ($data->portfolioId ?? null)) {
            $dataArray['portfolioId'] = $data->portfolioId ?? null;
        }
        if (array_key_exists('ruleName', get_object_vars($data)) && null !== ($data->ruleName ?? null)) {
            $dataArray['ruleName'] = $data->ruleName ?? null;
        }
        if (array_key_exists('localEventCode', get_object_vars($data)) && null !== ($data->localEventCode ?? null)) {
            $dataArray['localEventCode'] = $data->localEventCode ?? null;
        }
        if (array_key_exists('globalEventCode', get_object_vars($data)) && null !== ($data->globalEventCode ?? null)) {
            $dataArray['globalEventCode'] = $data->globalEventCode ?? null;
        }
        if (array_key_exists('newValue', get_object_vars($data)) && null !== ($data->newValue ?? null)) {
            $dataArray['newValue'] = $data->newValue ?? null;
        }
        if (array_key_exists('oldValue', get_object_vars($data)) && null !== ($data->oldValue ?? null)) {
            $dataArray['oldValue'] = $data->oldValue ?? null;
        }
        if (array_key_exists('eventDate', get_object_vars($data)) && null !== ($data->eventDate ?? null)) {
            $dataArray['eventDate'] = ($data->eventDate ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('createdDate', get_object_vars($data)) && null !== ($data->createdDate ?? null)) {
            $dataArray['createdDate'] = ($data->createdDate ?? null)->format('Y-m-d\TH:i:sP');
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
        return [\CreditSafe\API\Model\Event::class => false];
    }
}