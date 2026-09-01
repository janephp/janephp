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
class GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLossNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('revenue', $data) && \is_int($data['revenue'])) {
            $data['revenue'] = (float) $data['revenue'];
        }
        if (\array_key_exists('operatingCosts', $data) && \is_int($data['operatingCosts'])) {
            $data['operatingCosts'] = (float) $data['operatingCosts'];
        }
        if (\array_key_exists('operatingProfit', $data) && \is_int($data['operatingProfit'])) {
            $data['operatingProfit'] = (float) $data['operatingProfit'];
        }
        if (\array_key_exists('wagesAndSalaries', $data) && \is_int($data['wagesAndSalaries'])) {
            $data['wagesAndSalaries'] = (float) $data['wagesAndSalaries'];
        }
        if (\array_key_exists('pensionCosts', $data) && \is_int($data['pensionCosts'])) {
            $data['pensionCosts'] = (float) $data['pensionCosts'];
        }
        if (\array_key_exists('depreciation', $data) && \is_int($data['depreciation'])) {
            $data['depreciation'] = (float) $data['depreciation'];
        }
        if (\array_key_exists('amortisation', $data) && \is_int($data['amortisation'])) {
            $data['amortisation'] = (float) $data['amortisation'];
        }
        if (\array_key_exists('financialExpenses', $data) && \is_int($data['financialExpenses'])) {
            $data['financialExpenses'] = (float) $data['financialExpenses'];
        }
        if (\array_key_exists('profitBeforeTax', $data) && \is_int($data['profitBeforeTax'])) {
            $data['profitBeforeTax'] = (float) $data['profitBeforeTax'];
        }
        if (\array_key_exists('tax', $data) && \is_int($data['tax'])) {
            $data['tax'] = (float) $data['tax'];
        }
        if (\array_key_exists('profitAfterTax', $data) && \is_int($data['profitAfterTax'])) {
            $data['profitAfterTax'] = (float) $data['profitAfterTax'];
        }
        if (\array_key_exists('dividends', $data) && \is_int($data['dividends'])) {
            $data['dividends'] = (float) $data['dividends'];
        }
        if (\array_key_exists('minorityInterests', $data) && \is_int($data['minorityInterests'])) {
            $data['minorityInterests'] = (float) $data['minorityInterests'];
        }
        if (\array_key_exists('otherAppropriations', $data) && \is_int($data['otherAppropriations'])) {
            $data['otherAppropriations'] = (float) $data['otherAppropriations'];
        }
        if (\array_key_exists('retainedProfit', $data) && \is_int($data['retainedProfit'])) {
            $data['retainedProfit'] = (float) $data['retainedProfit'];
        }
        if (\array_key_exists('revenue', $data)) {
            $object->revenue = $data['revenue'];
            unset($data['revenue']);
        }
        if (\array_key_exists('operatingCosts', $data)) {
            $object->operatingCosts = $data['operatingCosts'];
            unset($data['operatingCosts']);
        }
        if (\array_key_exists('operatingProfit', $data)) {
            $object->operatingProfit = $data['operatingProfit'];
            unset($data['operatingProfit']);
        }
        if (\array_key_exists('wagesAndSalaries', $data)) {
            $object->wagesAndSalaries = $data['wagesAndSalaries'];
            unset($data['wagesAndSalaries']);
        }
        if (\array_key_exists('pensionCosts', $data)) {
            $object->pensionCosts = $data['pensionCosts'];
            unset($data['pensionCosts']);
        }
        if (\array_key_exists('depreciation', $data)) {
            $object->depreciation = $data['depreciation'];
            unset($data['depreciation']);
        }
        if (\array_key_exists('amortisation', $data)) {
            $object->amortisation = $data['amortisation'];
            unset($data['amortisation']);
        }
        if (\array_key_exists('financialExpenses', $data)) {
            $object->financialExpenses = $data['financialExpenses'];
            unset($data['financialExpenses']);
        }
        if (\array_key_exists('profitBeforeTax', $data)) {
            $object->profitBeforeTax = $data['profitBeforeTax'];
            unset($data['profitBeforeTax']);
        }
        if (\array_key_exists('tax', $data)) {
            $object->tax = $data['tax'];
            unset($data['tax']);
        }
        if (\array_key_exists('profitAfterTax', $data)) {
            $object->profitAfterTax = $data['profitAfterTax'];
            unset($data['profitAfterTax']);
        }
        if (\array_key_exists('dividends', $data)) {
            $object->dividends = $data['dividends'];
            unset($data['dividends']);
        }
        if (\array_key_exists('minorityInterests', $data)) {
            $object->minorityInterests = $data['minorityInterests'];
            unset($data['minorityInterests']);
        }
        if (\array_key_exists('otherAppropriations', $data)) {
            $object->otherAppropriations = $data['otherAppropriations'];
            unset($data['otherAppropriations']);
        }
        if (\array_key_exists('retainedProfit', $data)) {
            $object->retainedProfit = $data['retainedProfit'];
            unset($data['retainedProfit']);
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
        if (array_key_exists('revenue', get_object_vars($data)) && null !== ($data->revenue ?? null)) {
            $dataArray['revenue'] = $data->revenue ?? null;
        }
        if (array_key_exists('operatingCosts', get_object_vars($data)) && null !== ($data->operatingCosts ?? null)) {
            $dataArray['operatingCosts'] = $data->operatingCosts ?? null;
        }
        if (array_key_exists('operatingProfit', get_object_vars($data)) && null !== ($data->operatingProfit ?? null)) {
            $dataArray['operatingProfit'] = $data->operatingProfit ?? null;
        }
        if (array_key_exists('wagesAndSalaries', get_object_vars($data)) && null !== ($data->wagesAndSalaries ?? null)) {
            $dataArray['wagesAndSalaries'] = $data->wagesAndSalaries ?? null;
        }
        if (array_key_exists('pensionCosts', get_object_vars($data)) && null !== ($data->pensionCosts ?? null)) {
            $dataArray['pensionCosts'] = $data->pensionCosts ?? null;
        }
        if (array_key_exists('depreciation', get_object_vars($data)) && null !== ($data->depreciation ?? null)) {
            $dataArray['depreciation'] = $data->depreciation ?? null;
        }
        if (array_key_exists('amortisation', get_object_vars($data)) && null !== ($data->amortisation ?? null)) {
            $dataArray['amortisation'] = $data->amortisation ?? null;
        }
        if (array_key_exists('financialExpenses', get_object_vars($data)) && null !== ($data->financialExpenses ?? null)) {
            $dataArray['financialExpenses'] = $data->financialExpenses ?? null;
        }
        if (array_key_exists('profitBeforeTax', get_object_vars($data)) && null !== ($data->profitBeforeTax ?? null)) {
            $dataArray['profitBeforeTax'] = $data->profitBeforeTax ?? null;
        }
        if (array_key_exists('tax', get_object_vars($data)) && null !== ($data->tax ?? null)) {
            $dataArray['tax'] = $data->tax ?? null;
        }
        if (array_key_exists('profitAfterTax', get_object_vars($data)) && null !== ($data->profitAfterTax ?? null)) {
            $dataArray['profitAfterTax'] = $data->profitAfterTax ?? null;
        }
        if (array_key_exists('dividends', get_object_vars($data)) && null !== ($data->dividends ?? null)) {
            $dataArray['dividends'] = $data->dividends ?? null;
        }
        if (array_key_exists('minorityInterests', get_object_vars($data)) && null !== ($data->minorityInterests ?? null)) {
            $dataArray['minorityInterests'] = $data->minorityInterests ?? null;
        }
        if (array_key_exists('otherAppropriations', get_object_vars($data)) && null !== ($data->otherAppropriations ?? null)) {
            $dataArray['otherAppropriations'] = $data->otherAppropriations ?? null;
        }
        if (array_key_exists('retainedProfit', get_object_vars($data)) && null !== ($data->retainedProfit ?? null)) {
            $dataArray['retainedProfit'] = $data->retainedProfit ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss::class => false];
    }
}