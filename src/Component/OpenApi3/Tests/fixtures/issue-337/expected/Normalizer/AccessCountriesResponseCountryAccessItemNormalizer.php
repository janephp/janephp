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
            $object->setCreditsafeConnectOnlineReports($values);
            unset($data['creditsafeConnectOnlineReports']);
        }
        if (\array_key_exists('creditsafeConnectOfflineReports', $data)) {
            $values_1 = [];
            foreach ($data['creditsafeConnectOfflineReports'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem::class, 'json', $context);
            }
            $object->setCreditsafeConnectOfflineReports($values_1);
            unset($data['creditsafeConnectOfflineReports']);
        }
        if (\array_key_exists('creditsafeConnectMonitoring', $data)) {
            $values_2 = [];
            foreach ($data['creditsafeConnectMonitoring'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem::class, 'json', $context);
            }
            $object->setCreditsafeConnectMonitoring($values_2);
            unset($data['creditsafeConnectMonitoring']);
        }
        if (\array_key_exists('creditsafeConnectDirectorReports', $data)) {
            $values_3 = [];
            foreach ($data['creditsafeConnectDirectorReports'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem::class, 'json', $context);
            }
            $object->setCreditsafeConnectDirectorReports($values_3);
            unset($data['creditsafeConnectDirectorReports']);
        }
        if (\array_key_exists('creditsafeConnectImageDocuments', $data)) {
            $values_4 = [];
            foreach ($data['creditsafeConnectImageDocuments'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem::class, 'json', $context);
            }
            $object->setCreditsafeConnectImageDocuments($values_4);
            unset($data['creditsafeConnectImageDocuments']);
        }
        if (\array_key_exists('creditsafeConnectBankValidation', $data)) {
            $values_5 = [];
            foreach ($data['creditsafeConnectBankValidation'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem::class, 'json', $context);
            }
            $object->setCreditsafeConnectBankValidation($values_5);
            unset($data['creditsafeConnectBankValidation']);
        }
        if (\array_key_exists('creditsafeConnectBankVerification', $data)) {
            $values_6 = [];
            foreach ($data['creditsafeConnectBankVerification'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem::class, 'json', $context);
            }
            $object->setCreditsafeConnectBankVerification($values_6);
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
        if ($data->isInitialized('creditsafeConnectOnlineReports') && null !== $data->getCreditsafeConnectOnlineReports()) {
            $values = [];
            foreach ($data->getCreditsafeConnectOnlineReports() as $value) {
                $values[] = $value === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['creditsafeConnectOnlineReports'] = $values;
        }
        if ($data->isInitialized('creditsafeConnectOfflineReports') && null !== $data->getCreditsafeConnectOfflineReports()) {
            $values_1 = [];
            foreach ($data->getCreditsafeConnectOfflineReports() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['creditsafeConnectOfflineReports'] = $values_1;
        }
        if ($data->isInitialized('creditsafeConnectMonitoring') && null !== $data->getCreditsafeConnectMonitoring()) {
            $values_2 = [];
            foreach ($data->getCreditsafeConnectMonitoring() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['creditsafeConnectMonitoring'] = $values_2;
        }
        if ($data->isInitialized('creditsafeConnectDirectorReports') && null !== $data->getCreditsafeConnectDirectorReports()) {
            $values_3 = [];
            foreach ($data->getCreditsafeConnectDirectorReports() as $value_3) {
                $values_3[] = $value_3 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['creditsafeConnectDirectorReports'] = $values_3;
        }
        if ($data->isInitialized('creditsafeConnectImageDocuments') && null !== $data->getCreditsafeConnectImageDocuments()) {
            $values_4 = [];
            foreach ($data->getCreditsafeConnectImageDocuments() as $value_4) {
                $values_4[] = $value_4 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['creditsafeConnectImageDocuments'] = $values_4;
        }
        if ($data->isInitialized('creditsafeConnectBankValidation') && null !== $data->getCreditsafeConnectBankValidation()) {
            $values_5 = [];
            foreach ($data->getCreditsafeConnectBankValidation() as $value_5) {
                $values_5[] = $value_5 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_5, 'json', $context));
            }
            $dataArray['creditsafeConnectBankValidation'] = $values_5;
        }
        if ($data->isInitialized('creditsafeConnectBankVerification') && null !== $data->getCreditsafeConnectBankVerification()) {
            $values_6 = [];
            foreach ($data->getCreditsafeConnectBankVerification() as $value_6) {
                $values_6[] = $value_6 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_6, 'json', $context));
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