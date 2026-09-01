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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLossNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('turnover', $data) && \is_int($data['turnover'])) {
            $data['turnover'] = (float) $data['turnover'];
        }
        if (\array_key_exists('costOfSales', $data) && \is_int($data['costOfSales'])) {
            $data['costOfSales'] = (float) $data['costOfSales'];
        }
        if (\array_key_exists('grossProfit', $data) && \is_int($data['grossProfit'])) {
            $data['grossProfit'] = (float) $data['grossProfit'];
        }
        if (\array_key_exists('depreciation', $data) && \is_int($data['depreciation'])) {
            $data['depreciation'] = (float) $data['depreciation'];
        }
        if (\array_key_exists('auditFees', $data) && \is_int($data['auditFees'])) {
            $data['auditFees'] = (float) $data['auditFees'];
        }
        if (\array_key_exists('wagesAndSalaries', $data) && \is_int($data['wagesAndSalaries'])) {
            $data['wagesAndSalaries'] = (float) $data['wagesAndSalaries'];
        }
        if (\array_key_exists('directorsRemuneration', $data) && \is_int($data['directorsRemuneration'])) {
            $data['directorsRemuneration'] = (float) $data['directorsRemuneration'];
        }
        if (\array_key_exists('operatingProfit', $data) && \is_int($data['operatingProfit'])) {
            $data['operatingProfit'] = (float) $data['operatingProfit'];
        }
        if (\array_key_exists('interestExpense', $data) && \is_int($data['interestExpense'])) {
            $data['interestExpense'] = (float) $data['interestExpense'];
        }
        if (\array_key_exists('profitBeforeTax', $data) && \is_int($data['profitBeforeTax'])) {
            $data['profitBeforeTax'] = (float) $data['profitBeforeTax'];
        }
        if (\array_key_exists('taxation', $data) && \is_int($data['taxation'])) {
            $data['taxation'] = (float) $data['taxation'];
        }
        if (\array_key_exists('profitAfterTax', $data) && \is_int($data['profitAfterTax'])) {
            $data['profitAfterTax'] = (float) $data['profitAfterTax'];
        }
        if (\array_key_exists('dividends', $data) && \is_int($data['dividends'])) {
            $data['dividends'] = (float) $data['dividends'];
        }
        if (\array_key_exists('retainedProfit', $data) && \is_int($data['retainedProfit'])) {
            $data['retainedProfit'] = (float) $data['retainedProfit'];
        }
        if (\array_key_exists('turnover', $data)) {
            $object->turnover = $data['turnover'];
            unset($data['turnover']);
        }
        if (\array_key_exists('costOfSales', $data)) {
            $object->costOfSales = $data['costOfSales'];
            unset($data['costOfSales']);
        }
        if (\array_key_exists('grossProfit', $data)) {
            $object->grossProfit = $data['grossProfit'];
            unset($data['grossProfit']);
        }
        if (\array_key_exists('depreciation', $data)) {
            $object->depreciation = $data['depreciation'];
            unset($data['depreciation']);
        }
        if (\array_key_exists('auditFees', $data)) {
            $object->auditFees = $data['auditFees'];
            unset($data['auditFees']);
        }
        if (\array_key_exists('wagesAndSalaries', $data)) {
            $object->wagesAndSalaries = $data['wagesAndSalaries'];
            unset($data['wagesAndSalaries']);
        }
        if (\array_key_exists('directorsRemuneration', $data)) {
            $object->directorsRemuneration = $data['directorsRemuneration'];
            unset($data['directorsRemuneration']);
        }
        if (\array_key_exists('operatingProfit', $data)) {
            $object->operatingProfit = $data['operatingProfit'];
            unset($data['operatingProfit']);
        }
        if (\array_key_exists('interestExpense', $data)) {
            $object->interestExpense = $data['interestExpense'];
            unset($data['interestExpense']);
        }
        if (\array_key_exists('profitBeforeTax', $data)) {
            $object->profitBeforeTax = $data['profitBeforeTax'];
            unset($data['profitBeforeTax']);
        }
        if (\array_key_exists('taxation', $data)) {
            $object->taxation = $data['taxation'];
            unset($data['taxation']);
        }
        if (\array_key_exists('profitAfterTax', $data)) {
            $object->profitAfterTax = $data['profitAfterTax'];
            unset($data['profitAfterTax']);
        }
        if (\array_key_exists('dividends', $data)) {
            $object->dividends = $data['dividends'];
            unset($data['dividends']);
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
        if (array_key_exists('turnover', get_object_vars($data)) && null !== ($data->turnover ?? null)) {
            $dataArray['turnover'] = $data->turnover ?? null;
        }
        if (array_key_exists('costOfSales', get_object_vars($data)) && null !== ($data->costOfSales ?? null)) {
            $dataArray['costOfSales'] = $data->costOfSales ?? null;
        }
        if (array_key_exists('grossProfit', get_object_vars($data)) && null !== ($data->grossProfit ?? null)) {
            $dataArray['grossProfit'] = $data->grossProfit ?? null;
        }
        if (array_key_exists('depreciation', get_object_vars($data)) && null !== ($data->depreciation ?? null)) {
            $dataArray['depreciation'] = $data->depreciation ?? null;
        }
        if (array_key_exists('auditFees', get_object_vars($data)) && null !== ($data->auditFees ?? null)) {
            $dataArray['auditFees'] = $data->auditFees ?? null;
        }
        if (array_key_exists('wagesAndSalaries', get_object_vars($data)) && null !== ($data->wagesAndSalaries ?? null)) {
            $dataArray['wagesAndSalaries'] = $data->wagesAndSalaries ?? null;
        }
        if (array_key_exists('directorsRemuneration', get_object_vars($data)) && null !== ($data->directorsRemuneration ?? null)) {
            $dataArray['directorsRemuneration'] = $data->directorsRemuneration ?? null;
        }
        if (array_key_exists('operatingProfit', get_object_vars($data)) && null !== ($data->operatingProfit ?? null)) {
            $dataArray['operatingProfit'] = $data->operatingProfit ?? null;
        }
        if (array_key_exists('interestExpense', get_object_vars($data)) && null !== ($data->interestExpense ?? null)) {
            $dataArray['interestExpense'] = $data->interestExpense ?? null;
        }
        if (array_key_exists('profitBeforeTax', get_object_vars($data)) && null !== ($data->profitBeforeTax ?? null)) {
            $dataArray['profitBeforeTax'] = $data->profitBeforeTax ?? null;
        }
        if (array_key_exists('taxation', get_object_vars($data)) && null !== ($data->taxation ?? null)) {
            $dataArray['taxation'] = $data->taxation ?? null;
        }
        if (array_key_exists('profitAfterTax', get_object_vars($data)) && null !== ($data->profitAfterTax ?? null)) {
            $dataArray['profitAfterTax'] = $data->profitAfterTax ?? null;
        }
        if (array_key_exists('dividends', get_object_vars($data)) && null !== ($data->dividends ?? null)) {
            $dataArray['dividends'] = $data->dividends ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemProfitAndLoss::class => false];
    }
}