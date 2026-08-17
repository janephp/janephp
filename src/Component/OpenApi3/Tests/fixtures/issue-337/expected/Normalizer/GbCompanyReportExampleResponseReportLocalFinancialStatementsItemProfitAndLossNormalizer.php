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
            $object->setTurnover($data['turnover']);
            unset($data['turnover']);
        }
        if (\array_key_exists('costOfSales', $data)) {
            $object->setCostOfSales($data['costOfSales']);
            unset($data['costOfSales']);
        }
        if (\array_key_exists('grossProfit', $data)) {
            $object->setGrossProfit($data['grossProfit']);
            unset($data['grossProfit']);
        }
        if (\array_key_exists('depreciation', $data)) {
            $object->setDepreciation($data['depreciation']);
            unset($data['depreciation']);
        }
        if (\array_key_exists('auditFees', $data)) {
            $object->setAuditFees($data['auditFees']);
            unset($data['auditFees']);
        }
        if (\array_key_exists('wagesAndSalaries', $data)) {
            $object->setWagesAndSalaries($data['wagesAndSalaries']);
            unset($data['wagesAndSalaries']);
        }
        if (\array_key_exists('directorsRemuneration', $data)) {
            $object->setDirectorsRemuneration($data['directorsRemuneration']);
            unset($data['directorsRemuneration']);
        }
        if (\array_key_exists('operatingProfit', $data)) {
            $object->setOperatingProfit($data['operatingProfit']);
            unset($data['operatingProfit']);
        }
        if (\array_key_exists('interestExpense', $data)) {
            $object->setInterestExpense($data['interestExpense']);
            unset($data['interestExpense']);
        }
        if (\array_key_exists('profitBeforeTax', $data)) {
            $object->setProfitBeforeTax($data['profitBeforeTax']);
            unset($data['profitBeforeTax']);
        }
        if (\array_key_exists('taxation', $data)) {
            $object->setTaxation($data['taxation']);
            unset($data['taxation']);
        }
        if (\array_key_exists('profitAfterTax', $data)) {
            $object->setProfitAfterTax($data['profitAfterTax']);
            unset($data['profitAfterTax']);
        }
        if (\array_key_exists('dividends', $data)) {
            $object->setDividends($data['dividends']);
            unset($data['dividends']);
        }
        if (\array_key_exists('retainedProfit', $data)) {
            $object->setRetainedProfit($data['retainedProfit']);
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
        if ($data->isInitialized('turnover') && null !== $data->getTurnover()) {
            $dataArray['turnover'] = $data->getTurnover();
        }
        if ($data->isInitialized('costOfSales') && null !== $data->getCostOfSales()) {
            $dataArray['costOfSales'] = $data->getCostOfSales();
        }
        if ($data->isInitialized('grossProfit') && null !== $data->getGrossProfit()) {
            $dataArray['grossProfit'] = $data->getGrossProfit();
        }
        if ($data->isInitialized('depreciation') && null !== $data->getDepreciation()) {
            $dataArray['depreciation'] = $data->getDepreciation();
        }
        if ($data->isInitialized('auditFees') && null !== $data->getAuditFees()) {
            $dataArray['auditFees'] = $data->getAuditFees();
        }
        if ($data->isInitialized('wagesAndSalaries') && null !== $data->getWagesAndSalaries()) {
            $dataArray['wagesAndSalaries'] = $data->getWagesAndSalaries();
        }
        if ($data->isInitialized('directorsRemuneration') && null !== $data->getDirectorsRemuneration()) {
            $dataArray['directorsRemuneration'] = $data->getDirectorsRemuneration();
        }
        if ($data->isInitialized('operatingProfit') && null !== $data->getOperatingProfit()) {
            $dataArray['operatingProfit'] = $data->getOperatingProfit();
        }
        if ($data->isInitialized('interestExpense') && null !== $data->getInterestExpense()) {
            $dataArray['interestExpense'] = $data->getInterestExpense();
        }
        if ($data->isInitialized('profitBeforeTax') && null !== $data->getProfitBeforeTax()) {
            $dataArray['profitBeforeTax'] = $data->getProfitBeforeTax();
        }
        if ($data->isInitialized('taxation') && null !== $data->getTaxation()) {
            $dataArray['taxation'] = $data->getTaxation();
        }
        if ($data->isInitialized('profitAfterTax') && null !== $data->getProfitAfterTax()) {
            $dataArray['profitAfterTax'] = $data->getProfitAfterTax();
        }
        if ($data->isInitialized('dividends') && null !== $data->getDividends()) {
            $dataArray['dividends'] = $data->getDividends();
        }
        if ($data->isInitialized('retainedProfit') && null !== $data->getRetainedProfit()) {
            $dataArray['retainedProfit'] = $data->getRetainedProfit();
        }
        foreach ($data as $key => $value) {
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