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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('numberOfWeeks', $data) && \is_int($data['numberOfWeeks'])) {
            $data['numberOfWeeks'] = (float) $data['numberOfWeeks'];
        }
        if (\array_key_exists('consolidatedAccounts', $data) && \is_int($data['consolidatedAccounts'])) {
            $data['consolidatedAccounts'] = (bool) $data['consolidatedAccounts'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('yearEndDate', $data)) {
            $object->yearEndDate = $data['yearEndDate'];
            unset($data['yearEndDate']);
        }
        if (\array_key_exists('numberOfWeeks', $data)) {
            $object->numberOfWeeks = $data['numberOfWeeks'];
            unset($data['numberOfWeeks']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->currency = $data['currency'];
            unset($data['currency']);
        }
        if (\array_key_exists('consolidatedAccounts', $data)) {
            $object->consolidatedAccounts = $data['consolidatedAccounts'];
            unset($data['consolidatedAccounts']);
        }
        if (\array_key_exists('auditQualification', $data)) {
            $object->auditQualification = $data['auditQualification'];
            unset($data['auditQualification']);
        }
        if (\array_key_exists('profitAndLoss', $data)) {
            $object->profitAndLoss = $this->denormalizer->denormalize($data['profitAndLoss'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss::class, 'json', $context);
            unset($data['profitAndLoss']);
        }
        if (\array_key_exists('balanceSheet', $data)) {
            $object->balanceSheet = $this->denormalizer->denormalize($data['balanceSheet'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemBalanceSheet::class, 'json', $context);
            unset($data['balanceSheet']);
        }
        if (\array_key_exists('cashFlow', $data)) {
            $object->cashFlow = $this->denormalizer->denormalize($data['cashFlow'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow::class, 'json', $context);
            unset($data['cashFlow']);
        }
        if (\array_key_exists('otherFinancials', $data)) {
            $object->otherFinancials = $this->denormalizer->denormalize($data['otherFinancials'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials::class, 'json', $context);
            unset($data['otherFinancials']);
        }
        if (\array_key_exists('ratios', $data)) {
            $object->ratios = $this->denormalizer->denormalize($data['ratios'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemRatios::class, 'json', $context);
            unset($data['ratios']);
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
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type;
        }
        if (array_key_exists('yearEndDate', get_object_vars($data)) && null !== ($data->yearEndDate ?? null)) {
            $dataArray['yearEndDate'] = $data->yearEndDate;
        }
        if (array_key_exists('numberOfWeeks', get_object_vars($data)) && null !== ($data->numberOfWeeks ?? null)) {
            $dataArray['numberOfWeeks'] = $data->numberOfWeeks;
        }
        if (array_key_exists('currency', get_object_vars($data)) && null !== ($data->currency ?? null)) {
            $dataArray['currency'] = $data->currency;
        }
        if (array_key_exists('consolidatedAccounts', get_object_vars($data)) && null !== ($data->consolidatedAccounts ?? null)) {
            $dataArray['consolidatedAccounts'] = $data->consolidatedAccounts;
        }
        if (array_key_exists('auditQualification', get_object_vars($data)) && null !== ($data->auditQualification ?? null)) {
            $dataArray['auditQualification'] = $data->auditQualification;
        }
        if (array_key_exists('profitAndLoss', get_object_vars($data)) && null !== ($data->profitAndLoss ?? null)) {
            $normalized = $this->normalizer->normalize($data->profitAndLoss, 'json', $context);
            $dataArray['profitAndLoss'] = \is_iterable($normalized) ? new \CreditSafe\API\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('balanceSheet', get_object_vars($data)) && null !== ($data->balanceSheet ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->balanceSheet, 'json', $context);
            $dataArray['balanceSheet'] = \is_iterable($normalized_1) ? new \CreditSafe\API\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('cashFlow', get_object_vars($data)) && null !== ($data->cashFlow ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->cashFlow, 'json', $context);
            $dataArray['cashFlow'] = \is_iterable($normalized_2) ? new \CreditSafe\API\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('otherFinancials', get_object_vars($data)) && null !== ($data->otherFinancials ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->otherFinancials, 'json', $context);
            $dataArray['otherFinancials'] = \is_iterable($normalized_3) ? new \CreditSafe\API\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('ratios', get_object_vars($data)) && null !== ($data->ratios ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->ratios, 'json', $context);
            $dataArray['ratios'] = \is_iterable($normalized_4) ? new \CreditSafe\API\Runtime\JsonObject($normalized_4) : $normalized_4;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItem::class => false];
    }
}