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
class AccessCountriesResponseCountryAccessItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('creditsafeConnectOnlineReports', $data)) {
            $values = [];
            foreach ($data['creditsafeConnectOnlineReports'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem::class, 'json', $context);
            }
            $object->creditsafeConnectOnlineReports = $values;
            unset($data['creditsafeConnectOnlineReports']);
        }
        if (\array_key_exists('creditsafeConnectOfflineReports', $data)) {
            $values_1 = [];
            foreach ($data['creditsafeConnectOfflineReports'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem::class, 'json', $context);
            }
            $object->creditsafeConnectOfflineReports = $values_1;
            unset($data['creditsafeConnectOfflineReports']);
        }
        if (\array_key_exists('creditsafeConnectMonitoring', $data)) {
            $values_2 = [];
            foreach ($data['creditsafeConnectMonitoring'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem::class, 'json', $context);
            }
            $object->creditsafeConnectMonitoring = $values_2;
            unset($data['creditsafeConnectMonitoring']);
        }
        if (\array_key_exists('creditsafeConnectDirectorReports', $data)) {
            $values_3 = [];
            foreach ($data['creditsafeConnectDirectorReports'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem::class, 'json', $context);
            }
            $object->creditsafeConnectDirectorReports = $values_3;
            unset($data['creditsafeConnectDirectorReports']);
        }
        if (\array_key_exists('creditsafeConnectImageDocuments', $data)) {
            $values_4 = [];
            foreach ($data['creditsafeConnectImageDocuments'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem::class, 'json', $context);
            }
            $object->creditsafeConnectImageDocuments = $values_4;
            unset($data['creditsafeConnectImageDocuments']);
        }
        if (\array_key_exists('creditsafeConnectBankValidation', $data)) {
            $values_5 = [];
            foreach ($data['creditsafeConnectBankValidation'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem::class, 'json', $context);
            }
            $object->creditsafeConnectBankValidation = $values_5;
            unset($data['creditsafeConnectBankValidation']);
        }
        if (\array_key_exists('creditsafeConnectBankVerification', $data)) {
            $values_6 = [];
            foreach ($data['creditsafeConnectBankVerification'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem::class, 'json', $context);
            }
            $object->creditsafeConnectBankVerification = $values_6;
            unset($data['creditsafeConnectBankVerification']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('creditsafeConnectOnlineReports', get_object_vars($data)) && null !== ($data->creditsafeConnectOnlineReports ?? null)) {
            $values = [];
            foreach ($data->creditsafeConnectOnlineReports as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \CreditSafe\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['creditsafeConnectOnlineReports'] = $values;
        }
        if (array_key_exists('creditsafeConnectOfflineReports', get_object_vars($data)) && null !== ($data->creditsafeConnectOfflineReports ?? null)) {
            $values_1 = [];
            foreach ($data->creditsafeConnectOfflineReports as $value_1) {
                $normalized_1 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_1) ? new \CreditSafe\API\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['creditsafeConnectOfflineReports'] = $values_1;
        }
        if (array_key_exists('creditsafeConnectMonitoring', get_object_vars($data)) && null !== ($data->creditsafeConnectMonitoring ?? null)) {
            $values_2 = [];
            foreach ($data->creditsafeConnectMonitoring as $value_2) {
                $normalized_2 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_2) ? new \CreditSafe\API\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['creditsafeConnectMonitoring'] = $values_2;
        }
        if (array_key_exists('creditsafeConnectDirectorReports', get_object_vars($data)) && null !== ($data->creditsafeConnectDirectorReports ?? null)) {
            $values_3 = [];
            foreach ($data->creditsafeConnectDirectorReports as $value_3) {
                $normalized_3 = $value_3 === null ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = \is_iterable($normalized_3) ? new \CreditSafe\API\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['creditsafeConnectDirectorReports'] = $values_3;
        }
        if (array_key_exists('creditsafeConnectImageDocuments', get_object_vars($data)) && null !== ($data->creditsafeConnectImageDocuments ?? null)) {
            $values_4 = [];
            foreach ($data->creditsafeConnectImageDocuments as $value_4) {
                $normalized_4 = $value_4 === null ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = \is_iterable($normalized_4) ? new \CreditSafe\API\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['creditsafeConnectImageDocuments'] = $values_4;
        }
        if (array_key_exists('creditsafeConnectBankValidation', get_object_vars($data)) && null !== ($data->creditsafeConnectBankValidation ?? null)) {
            $values_5 = [];
            foreach ($data->creditsafeConnectBankValidation as $value_5) {
                $normalized_5 = $value_5 === null ? null : $this->normalizer->normalize($value_5, 'json', $context);
                $values_5[] = \is_iterable($normalized_5) ? new \CreditSafe\API\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['creditsafeConnectBankValidation'] = $values_5;
        }
        if (array_key_exists('creditsafeConnectBankVerification', get_object_vars($data)) && null !== ($data->creditsafeConnectBankVerification ?? null)) {
            $values_6 = [];
            foreach ($data->creditsafeConnectBankVerification as $value_6) {
                $normalized_6 = $value_6 === null ? null : $this->normalizer->normalize($value_6, 'json', $context);
                $values_6[] = \is_iterable($normalized_6) ? new \CreditSafe\API\Runtime\JsonObject($normalized_6) : $normalized_6;
            }
            $dataArray['creditsafeConnectBankVerification'] = $values_6;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\AccessCountriesResponseCountryAccessItem::class => false];
    }
}