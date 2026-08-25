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
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdDate']);
            if (false === $date) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['createdDate'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedDate($date);
            unset($data['createdDate']);
        }
        if (\array_key_exists('csCustomerId', $data)) {
            $object->setCsCustomerId($data['csCustomerId']);
            unset($data['csCustomerId']);
        }
        if (\array_key_exists('csUserId', $data)) {
            $object->setCsUserId($data['csUserId']);
            unset($data['csUserId']);
        }
        if (\array_key_exists('isAutoTracker', $data)) {
            $object->setIsAutoTracker($data['isAutoTracker']);
            unset($data['isAutoTracker']);
        }
        if (\array_key_exists('languageCode', $data)) {
            $object->setLanguageCode($data['languageCode']);
            unset($data['languageCode']);
        }
        if (\array_key_exists('lastAccessDate', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastAccessDate']);
            if (false === $date_1) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['lastAccessDate'], 'Y-m-d\TH:i:sP');
            }
            $object->setLastAccessDate($date_1);
            unset($data['lastAccessDate']);
        }
        if (\array_key_exists('modifiedDate', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['modifiedDate']);
            if (false === $date_2) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['modifiedDate'], 'Y-m-d\TH:i:sP');
            }
            $object->setModifiedDate($date_2);
            unset($data['modifiedDate']);
        }
        if (\array_key_exists('contractEndDate', $data)) {
            $date_3 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['contractEndDate']);
            if (false === $date_3) {
                throw new \CreditSafe\API\Runtime\Normalizer\InvalidDateException($data['contractEndDate'], 'Y-m-d\TH:i:sP');
            }
            $object->setContractEndDate($date_3);
            unset($data['contractEndDate']);
        }
        if (\array_key_exists('userId', $data)) {
            $object->setUserId($data['userId']);
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
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
        }
        if ($data->isInitialized('createdDate') && null !== $data->getCreatedDate()) {
            $dataArray['createdDate'] = $data->getCreatedDate()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('csCustomerId') && null !== $data->getCsCustomerId()) {
            $dataArray['csCustomerId'] = $data->getCsCustomerId();
        }
        if ($data->isInitialized('csUserId') && null !== $data->getCsUserId()) {
            $dataArray['csUserId'] = $data->getCsUserId();
        }
        if ($data->isInitialized('isAutoTracker') && null !== $data->getIsAutoTracker()) {
            $dataArray['isAutoTracker'] = $data->getIsAutoTracker();
        }
        if ($data->isInitialized('languageCode') && null !== $data->getLanguageCode()) {
            $dataArray['languageCode'] = $data->getLanguageCode();
        }
        if ($data->isInitialized('lastAccessDate') && null !== $data->getLastAccessDate()) {
            $dataArray['lastAccessDate'] = $data->getLastAccessDate()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('modifiedDate') && null !== $data->getModifiedDate()) {
            $dataArray['modifiedDate'] = $data->getModifiedDate()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('contractEndDate') && null !== $data->getContractEndDate()) {
            $dataArray['contractEndDate'] = $data->getContractEndDate()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['userId'] = $data->getUserId();
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