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
            $dataArray['companyId'] = $data->companyId ?? null;
        }
        if (array_key_exists('language', get_object_vars($data)) && null !== ($data->language ?? null)) {
            $dataArray['language'] = $data->language ?? null;
        }
        if (array_key_exists('companySummary', get_object_vars($data)) && null !== ($data->companySummary ?? null)) {
            $dataArray['companySummary'] = ($data->companySummary ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->companySummary ?? null, 'json', $context));
        }
        if (array_key_exists('companyIdentification', get_object_vars($data)) && null !== ($data->companyIdentification ?? null)) {
            $dataArray['companyIdentification'] = ($data->companyIdentification ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->companyIdentification ?? null, 'json', $context));
        }
        if (array_key_exists('creditScore', get_object_vars($data)) && null !== ($data->creditScore ?? null)) {
            $dataArray['creditScore'] = ($data->creditScore ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->creditScore ?? null, 'json', $context));
        }
        if (array_key_exists('contactInformation', get_object_vars($data)) && null !== ($data->contactInformation ?? null)) {
            $dataArray['contactInformation'] = ($data->contactInformation ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->contactInformation ?? null, 'json', $context));
        }
        if (array_key_exists('shareCapitalStructure', get_object_vars($data)) && null !== ($data->shareCapitalStructure ?? null)) {
            $dataArray['shareCapitalStructure'] = ($data->shareCapitalStructure ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->shareCapitalStructure ?? null, 'json', $context));
        }
        if (array_key_exists('directors', get_object_vars($data)) && null !== ($data->directors ?? null)) {
            $dataArray['directors'] = ($data->directors ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->directors ?? null, 'json', $context));
        }
        if (array_key_exists('otherInformation', get_object_vars($data)) && null !== ($data->otherInformation ?? null)) {
            $dataArray['otherInformation'] = ($data->otherInformation ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->otherInformation ?? null, 'json', $context));
        }
        if (array_key_exists('groupStructure', get_object_vars($data)) && null !== ($data->groupStructure ?? null)) {
            $dataArray['groupStructure'] = ($data->groupStructure ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->groupStructure ?? null, 'json', $context));
        }
        if (array_key_exists('extendedGroupStructure', get_object_vars($data)) && null !== ($data->extendedGroupStructure ?? null)) {
            $values = [];
            foreach ($data->extendedGroupStructure ?? null as $value) {
                $values[] = $value === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['extendedGroupStructure'] = $values;
        }
        if (array_key_exists('financialStatements', get_object_vars($data)) && null !== ($data->financialStatements ?? null)) {
            $values_1 = [];
            foreach ($data->financialStatements ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['financialStatements'] = $values_1;
        }
        if (array_key_exists('localFinancialStatements', get_object_vars($data)) && null !== ($data->localFinancialStatements ?? null)) {
            $values_2 = [];
            foreach ($data->localFinancialStatements ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['localFinancialStatements'] = $values_2;
        }
        if (array_key_exists('paymentData', get_object_vars($data)) && null !== ($data->paymentData ?? null)) {
            $dataArray['paymentData'] = ($data->paymentData ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->paymentData ?? null, 'json', $context));
        }
        if (array_key_exists('negativeInformation', get_object_vars($data)) && null !== ($data->negativeInformation ?? null)) {
            $dataArray['negativeInformation'] = ($data->negativeInformation ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->negativeInformation ?? null, 'json', $context));
        }
        if (array_key_exists('additionalInformation', get_object_vars($data)) && null !== ($data->additionalInformation ?? null)) {
            $dataArray['additionalInformation'] = ($data->additionalInformation ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->additionalInformation ?? null, 'json', $context));
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