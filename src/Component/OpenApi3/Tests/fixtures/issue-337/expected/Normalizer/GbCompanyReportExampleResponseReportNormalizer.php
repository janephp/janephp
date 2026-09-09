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
class GbCompanyReportExampleResponseReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReport::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReport::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('companyId', $data)) {
            $object->companyId = $data['companyId'];
            unset($data['companyId']);
        }
        if (\array_key_exists('language', $data)) {
            $object->language = $data['language'];
            unset($data['language']);
        }
        if (\array_key_exists('companySummary', $data)) {
            $object->companySummary = $this->denormalizer->denormalize($data['companySummary'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary::class, 'json', $context);
            unset($data['companySummary']);
        }
        if (\array_key_exists('companyIdentification', $data)) {
            $object->companyIdentification = $this->denormalizer->denormalize($data['companyIdentification'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class, 'json', $context);
            unset($data['companyIdentification']);
        }
        if (\array_key_exists('creditScore', $data)) {
            $object->creditScore = $this->denormalizer->denormalize($data['creditScore'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore::class, 'json', $context);
            unset($data['creditScore']);
        }
        if (\array_key_exists('contactInformation', $data)) {
            $object->contactInformation = $this->denormalizer->denormalize($data['contactInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformation::class, 'json', $context);
            unset($data['contactInformation']);
        }
        if (\array_key_exists('shareCapitalStructure', $data)) {
            $object->shareCapitalStructure = $this->denormalizer->denormalize($data['shareCapitalStructure'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class, 'json', $context);
            unset($data['shareCapitalStructure']);
        }
        if (\array_key_exists('directors', $data)) {
            $object->directors = $this->denormalizer->denormalize($data['directors'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectors::class, 'json', $context);
            unset($data['directors']);
        }
        if (\array_key_exists('otherInformation', $data)) {
            $object->otherInformation = $this->denormalizer->denormalize($data['otherInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportOtherInformation::class, 'json', $context);
            unset($data['otherInformation']);
        }
        if (\array_key_exists('groupStructure', $data)) {
            $object->groupStructure = $this->denormalizer->denormalize($data['groupStructure'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportGroupStructure::class, 'json', $context);
            unset($data['groupStructure']);
        }
        if (\array_key_exists('extendedGroupStructure', $data)) {
            $values = [];
            foreach ($data['extendedGroupStructure'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportExtendedGroupStructureItem::class, 'json', $context);
            }
            $object->extendedGroupStructure = $values;
            unset($data['extendedGroupStructure']);
        }
        if (\array_key_exists('financialStatements', $data)) {
            $values_1 = [];
            foreach ($data['financialStatements'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItem::class, 'json', $context);
            }
            $object->financialStatements = $values_1;
            unset($data['financialStatements']);
        }
        if (\array_key_exists('localFinancialStatements', $data)) {
            $values_2 = [];
            foreach ($data['localFinancialStatements'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class, 'json', $context);
            }
            $object->localFinancialStatements = $values_2;
            unset($data['localFinancialStatements']);
        }
        if (\array_key_exists('paymentData', $data)) {
            $object->paymentData = $this->denormalizer->denormalize($data['paymentData'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData::class, 'json', $context);
            unset($data['paymentData']);
        }
        if (\array_key_exists('negativeInformation', $data)) {
            $object->negativeInformation = $this->denormalizer->denormalize($data['negativeInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformation::class, 'json', $context);
            unset($data['negativeInformation']);
        }
        if (\array_key_exists('additionalInformation', $data)) {
            $object->additionalInformation = $this->denormalizer->denormalize($data['additionalInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformation::class, 'json', $context);
            unset($data['additionalInformation']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('companyId', get_object_vars($data)) && null !== ($data->companyId ?? null)) {
            $dataArray['companyId'] = $data->companyId;
        }
        if (array_key_exists('language', get_object_vars($data)) && null !== ($data->language ?? null)) {
            $dataArray['language'] = $data->language;
        }
        if (array_key_exists('companySummary', get_object_vars($data)) && null !== ($data->companySummary ?? null)) {
            $normalized = $this->normalizer->normalize($data->companySummary, 'json', $context);
            $dataArray['companySummary'] = \is_iterable($normalized) ? new \CreditSafe\API\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('companyIdentification', get_object_vars($data)) && null !== ($data->companyIdentification ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->companyIdentification, 'json', $context);
            $dataArray['companyIdentification'] = \is_iterable($normalized_1) ? new \CreditSafe\API\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('creditScore', get_object_vars($data)) && null !== ($data->creditScore ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->creditScore, 'json', $context);
            $dataArray['creditScore'] = \is_iterable($normalized_2) ? new \CreditSafe\API\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('contactInformation', get_object_vars($data)) && null !== ($data->contactInformation ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->contactInformation, 'json', $context);
            $dataArray['contactInformation'] = \is_iterable($normalized_3) ? new \CreditSafe\API\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('shareCapitalStructure', get_object_vars($data)) && null !== ($data->shareCapitalStructure ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->shareCapitalStructure, 'json', $context);
            $dataArray['shareCapitalStructure'] = \is_iterable($normalized_4) ? new \CreditSafe\API\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('directors', get_object_vars($data)) && null !== ($data->directors ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->directors, 'json', $context);
            $dataArray['directors'] = \is_iterable($normalized_5) ? new \CreditSafe\API\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (array_key_exists('otherInformation', get_object_vars($data)) && null !== ($data->otherInformation ?? null)) {
            $normalized_6 = $this->normalizer->normalize($data->otherInformation, 'json', $context);
            $dataArray['otherInformation'] = \is_iterable($normalized_6) ? new \CreditSafe\API\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (array_key_exists('groupStructure', get_object_vars($data)) && null !== ($data->groupStructure ?? null)) {
            $normalized_7 = $this->normalizer->normalize($data->groupStructure, 'json', $context);
            $dataArray['groupStructure'] = \is_iterable($normalized_7) ? new \CreditSafe\API\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        if (array_key_exists('extendedGroupStructure', get_object_vars($data)) && null !== ($data->extendedGroupStructure ?? null)) {
            $values = [];
            foreach ($data->extendedGroupStructure as $value) {
                $normalized_8 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized_8) ? new \CreditSafe\API\Runtime\JsonObject($normalized_8) : $normalized_8;
            }
            $dataArray['extendedGroupStructure'] = $values;
        }
        if (array_key_exists('financialStatements', get_object_vars($data)) && null !== ($data->financialStatements ?? null)) {
            $values_1 = [];
            foreach ($data->financialStatements as $value_1) {
                $normalized_9 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_9) ? new \CreditSafe\API\Runtime\JsonObject($normalized_9) : $normalized_9;
            }
            $dataArray['financialStatements'] = $values_1;
        }
        if (array_key_exists('localFinancialStatements', get_object_vars($data)) && null !== ($data->localFinancialStatements ?? null)) {
            $values_2 = [];
            foreach ($data->localFinancialStatements as $value_2) {
                $normalized_10 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_10) ? new \CreditSafe\API\Runtime\JsonObject($normalized_10) : $normalized_10;
            }
            $dataArray['localFinancialStatements'] = $values_2;
        }
        if (array_key_exists('paymentData', get_object_vars($data)) && null !== ($data->paymentData ?? null)) {
            $normalized_11 = $this->normalizer->normalize($data->paymentData, 'json', $context);
            $dataArray['paymentData'] = \is_iterable($normalized_11) ? new \CreditSafe\API\Runtime\JsonObject($normalized_11) : $normalized_11;
        }
        if (array_key_exists('negativeInformation', get_object_vars($data)) && null !== ($data->negativeInformation ?? null)) {
            $normalized_12 = $this->normalizer->normalize($data->negativeInformation, 'json', $context);
            $dataArray['negativeInformation'] = \is_iterable($normalized_12) ? new \CreditSafe\API\Runtime\JsonObject($normalized_12) : $normalized_12;
        }
        if (array_key_exists('additionalInformation', get_object_vars($data)) && null !== ($data->additionalInformation ?? null)) {
            $normalized_13 = $this->normalizer->normalize($data->additionalInformation, 'json', $context);
            $dataArray['additionalInformation'] = \is_iterable($normalized_13) ? new \CreditSafe\API\Runtime\JsonObject($normalized_13) : $normalized_13;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReport::class => false];
    }
}