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
class GbCompanyReportExampleResponseReportAdditionalInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('companyHistory', $data)) {
            $values = [];
            foreach ($data['companyHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCompanyHistoryItem::class, 'json', $context);
            }
            $object->companyHistory = $values;
            unset($data['companyHistory']);
        }
        if (\array_key_exists('mortgageSummary', $data)) {
            $object->mortgageSummary = $this->denormalizer->denormalize($data['mortgageSummary'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary::class, 'json', $context);
            unset($data['mortgageSummary']);
        }
        if (\array_key_exists('mortgageDetails', $data)) {
            $values_1 = [];
            foreach ($data['mortgageDetails'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem::class, 'json', $context);
            }
            $object->mortgageDetails = $values_1;
            unset($data['mortgageDetails']);
        }
        if (\array_key_exists('commentaries', $data)) {
            $values_2 = [];
            foreach ($data['commentaries'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem::class, 'json', $context);
            }
            $object->commentaries = $values_2;
            unset($data['commentaries']);
        }
        if (\array_key_exists('ratingHistory', $data)) {
            $values_3 = [];
            foreach ($data['ratingHistory'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem::class, 'json', $context);
            }
            $object->ratingHistory = $values_3;
            unset($data['ratingHistory']);
        }
        if (\array_key_exists('creditLimitHistory', $data)) {
            $values_4 = [];
            foreach ($data['creditLimitHistory'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem::class, 'json', $context);
            }
            $object->creditLimitHistory = $values_4;
            unset($data['creditLimitHistory']);
        }
        if (\array_key_exists('badDebtDetails', $data)) {
            $values_5 = [];
            foreach ($data['badDebtDetails'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem::class, 'json', $context);
            }
            $object->badDebtDetails = $values_5;
            unset($data['badDebtDetails']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('companyHistory', get_object_vars($data)) && null !== ($data->companyHistory ?? null)) {
            $values = [];
            foreach ($data->companyHistory as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \CreditSafe\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['companyHistory'] = $values;
        }
        if (array_key_exists('mortgageSummary', get_object_vars($data)) && null !== ($data->mortgageSummary ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->mortgageSummary, 'json', $context);
            $dataArray['mortgageSummary'] = \is_iterable($normalized_1) ? new \CreditSafe\API\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('mortgageDetails', get_object_vars($data)) && null !== ($data->mortgageDetails ?? null)) {
            $values_1 = [];
            foreach ($data->mortgageDetails as $value_1) {
                $normalized_2 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_2) ? new \CreditSafe\API\Runtime\JsonObject($normalized_2) : $normalized_2;
            }
            $dataArray['mortgageDetails'] = $values_1;
        }
        if (array_key_exists('commentaries', get_object_vars($data)) && null !== ($data->commentaries ?? null)) {
            $values_2 = [];
            foreach ($data->commentaries as $value_2) {
                $normalized_3 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_3) ? new \CreditSafe\API\Runtime\JsonObject($normalized_3) : $normalized_3;
            }
            $dataArray['commentaries'] = $values_2;
        }
        if (array_key_exists('ratingHistory', get_object_vars($data)) && null !== ($data->ratingHistory ?? null)) {
            $values_3 = [];
            foreach ($data->ratingHistory as $value_3) {
                $normalized_4 = $value_3 === null ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = \is_iterable($normalized_4) ? new \CreditSafe\API\Runtime\JsonObject($normalized_4) : $normalized_4;
            }
            $dataArray['ratingHistory'] = $values_3;
        }
        if (array_key_exists('creditLimitHistory', get_object_vars($data)) && null !== ($data->creditLimitHistory ?? null)) {
            $values_4 = [];
            foreach ($data->creditLimitHistory as $value_4) {
                $normalized_5 = $value_4 === null ? null : $this->normalizer->normalize($value_4, 'json', $context);
                $values_4[] = \is_iterable($normalized_5) ? new \CreditSafe\API\Runtime\JsonObject($normalized_5) : $normalized_5;
            }
            $dataArray['creditLimitHistory'] = $values_4;
        }
        if (array_key_exists('badDebtDetails', get_object_vars($data)) && null !== ($data->badDebtDetails ?? null)) {
            $values_5 = [];
            foreach ($data->badDebtDetails as $value_5) {
                $normalized_6 = $value_5 === null ? null : $this->normalizer->normalize($value_5, 'json', $context);
                $values_5[] = \is_iterable($normalized_6) ? new \CreditSafe\API\Runtime\JsonObject($normalized_6) : $normalized_6;
            }
            $dataArray['badDebtDetails'] = $values_5;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformation::class => false];
    }
}