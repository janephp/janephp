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
            $object->setCompanyHistory($values);
            unset($data['companyHistory']);
        }
        if (\array_key_exists('mortgageSummary', $data)) {
            $object->setMortgageSummary($this->denormalizer->denormalize($data['mortgageSummary'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageSummary::class, 'json', $context));
            unset($data['mortgageSummary']);
        }
        if (\array_key_exists('mortgageDetails', $data)) {
            $values_1 = [];
            foreach ($data['mortgageDetails'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem::class, 'json', $context);
            }
            $object->setMortgageDetails($values_1);
            unset($data['mortgageDetails']);
        }
        if (\array_key_exists('commentaries', $data)) {
            $values_2 = [];
            foreach ($data['commentaries'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem::class, 'json', $context);
            }
            $object->setCommentaries($values_2);
            unset($data['commentaries']);
        }
        if (\array_key_exists('ratingHistory', $data)) {
            $values_3 = [];
            foreach ($data['ratingHistory'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationRatingHistoryItem::class, 'json', $context);
            }
            $object->setRatingHistory($values_3);
            unset($data['ratingHistory']);
        }
        if (\array_key_exists('creditLimitHistory', $data)) {
            $values_4 = [];
            foreach ($data['creditLimitHistory'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationCreditLimitHistoryItem::class, 'json', $context);
            }
            $object->setCreditLimitHistory($values_4);
            unset($data['creditLimitHistory']);
        }
        if (\array_key_exists('badDebtDetails', $data)) {
            $values_5 = [];
            foreach ($data['badDebtDetails'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem::class, 'json', $context);
            }
            $object->setBadDebtDetails($values_5);
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
        if ($data->isInitialized('companyHistory') && null !== $data->getCompanyHistory()) {
            $values = [];
            foreach ($data->getCompanyHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['companyHistory'] = $values;
        }
        if ($data->isInitialized('mortgageSummary') && null !== $data->getMortgageSummary()) {
            $dataArray['mortgageSummary'] = $this->normalizer->normalize($data->getMortgageSummary(), 'json', $context);
        }
        if ($data->isInitialized('mortgageDetails') && null !== $data->getMortgageDetails()) {
            $values_1 = [];
            foreach ($data->getMortgageDetails() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['mortgageDetails'] = $values_1;
        }
        if ($data->isInitialized('commentaries') && null !== $data->getCommentaries()) {
            $values_2 = [];
            foreach ($data->getCommentaries() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['commentaries'] = $values_2;
        }
        if ($data->isInitialized('ratingHistory') && null !== $data->getRatingHistory()) {
            $values_3 = [];
            foreach ($data->getRatingHistory() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['ratingHistory'] = $values_3;
        }
        if ($data->isInitialized('creditLimitHistory') && null !== $data->getCreditLimitHistory()) {
            $values_4 = [];
            foreach ($data->getCreditLimitHistory() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['creditLimitHistory'] = $values_4;
        }
        if ($data->isInitialized('badDebtDetails') && null !== $data->getBadDebtDetails()) {
            $values_5 = [];
            foreach ($data->getBadDebtDetails() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['badDebtDetails'] = $values_5;
        }
        foreach ($data as $key => $value_6) {
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