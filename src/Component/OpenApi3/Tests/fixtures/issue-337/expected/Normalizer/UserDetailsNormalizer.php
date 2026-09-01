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
class UserDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\UserDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\UserDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\UserDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('csCustomerId', $data) && \is_int($data['csCustomerId'])) {
            $data['csCustomerId'] = (float) $data['csCustomerId'];
        }
        if (\array_key_exists('csUserId', $data) && \is_int($data['csUserId'])) {
            $data['csUserId'] = (float) $data['csUserId'];
        }
        if (\array_key_exists('userId', $data) && \is_int($data['userId'])) {
            $data['userId'] = (float) $data['userId'];
        }
        if (\array_key_exists('isAutoTracker', $data) && \is_int($data['isAutoTracker'])) {
            $data['isAutoTracker'] = (bool) $data['isAutoTracker'];
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->countryCode = $data['countryCode'];
            unset($data['countryCode']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdDate']);
            if (false === $date) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['createdDate'], 'Y-m-d\TH:i:sP');
            }
            $object->createdDate = $date;
            unset($data['createdDate']);
        }
        if (\array_key_exists('csCustomerId', $data)) {
            $object->csCustomerId = $data['csCustomerId'];
            unset($data['csCustomerId']);
        }
        if (\array_key_exists('csUserId', $data)) {
            $object->csUserId = $data['csUserId'];
            unset($data['csUserId']);
        }
        if (\array_key_exists('isAutoTracker', $data)) {
            $object->isAutoTracker = $data['isAutoTracker'];
            unset($data['isAutoTracker']);
        }
        if (\array_key_exists('languageCode', $data)) {
            $object->languageCode = $data['languageCode'];
            unset($data['languageCode']);
        }
        if (\array_key_exists('lastAccessDate', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastAccessDate']);
            if (false === $date_1) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['lastAccessDate'], 'Y-m-d\TH:i:sP');
            }
            $object->lastAccessDate = $date_1;
            unset($data['lastAccessDate']);
        }
        if (\array_key_exists('modifiedDate', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['modifiedDate']);
            if (false === $date_2) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['modifiedDate'], 'Y-m-d\TH:i:sP');
            }
            $object->modifiedDate = $date_2;
            unset($data['modifiedDate']);
        }
        if (\array_key_exists('contractEndDate', $data)) {
            $date_3 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['contractEndDate']);
            if (false === $date_3) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['contractEndDate'], 'Y-m-d\TH:i:sP');
            }
            $object->contractEndDate = $date_3;
            unset($data['contractEndDate']);
        }
        if (\array_key_exists('userId', $data)) {
            $object->userId = $data['userId'];
            unset($data['userId']);
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
        if (array_key_exists('countryCode', get_object_vars($data)) && null !== ($data->countryCode ?? null)) {
            $dataArray['countryCode'] = $data->countryCode ?? null;
        }
        if (array_key_exists('createdDate', get_object_vars($data)) && null !== ($data->createdDate ?? null)) {
            $dataArray['createdDate'] = ($data->createdDate ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('csCustomerId', get_object_vars($data)) && null !== ($data->csCustomerId ?? null)) {
            $dataArray['csCustomerId'] = $data->csCustomerId ?? null;
        }
        if (array_key_exists('csUserId', get_object_vars($data)) && null !== ($data->csUserId ?? null)) {
            $dataArray['csUserId'] = $data->csUserId ?? null;
        }
        if (array_key_exists('isAutoTracker', get_object_vars($data)) && null !== ($data->isAutoTracker ?? null)) {
            $dataArray['isAutoTracker'] = $data->isAutoTracker ?? null;
        }
        if (array_key_exists('languageCode', get_object_vars($data)) && null !== ($data->languageCode ?? null)) {
            $dataArray['languageCode'] = $data->languageCode ?? null;
        }
        if (array_key_exists('lastAccessDate', get_object_vars($data)) && null !== ($data->lastAccessDate ?? null)) {
            $dataArray['lastAccessDate'] = ($data->lastAccessDate ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('modifiedDate', get_object_vars($data)) && null !== ($data->modifiedDate ?? null)) {
            $dataArray['modifiedDate'] = ($data->modifiedDate ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('contractEndDate', get_object_vars($data)) && null !== ($data->contractEndDate ?? null)) {
            $dataArray['contractEndDate'] = ($data->contractEndDate ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('userId', get_object_vars($data)) && null !== ($data->userId ?? null)) {
            $dataArray['userId'] = $data->userId ?? null;
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
        return [\CreditSafe\API\Model\UserDetails::class => false];
    }
}