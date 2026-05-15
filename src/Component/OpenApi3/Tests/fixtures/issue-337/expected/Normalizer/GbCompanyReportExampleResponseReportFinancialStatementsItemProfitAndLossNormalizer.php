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
            $object->setRevenue($data['revenue']);
            unset($data['revenue']);
        }
        if (\array_key_exists('operatingCosts', $data)) {
            $object->setOperatingCosts($data['operatingCosts']);
            unset($data['operatingCosts']);
        }
        if (\array_key_exists('operatingProfit', $data)) {
            $object->setOperatingProfit($data['operatingProfit']);
            unset($data['operatingProfit']);
        }
        if (\array_key_exists('wagesAndSalaries', $data)) {
            $object->setWagesAndSalaries($data['wagesAndSalaries']);
            unset($data['wagesAndSalaries']);
        }
        if (\array_key_exists('pensionCosts', $data)) {
            $object->setPensionCosts($data['pensionCosts']);
            unset($data['pensionCosts']);
        }
        if (\array_key_exists('depreciation', $data)) {
            $object->setDepreciation($data['depreciation']);
            unset($data['depreciation']);
        }
        if (\array_key_exists('amortisation', $data)) {
            $object->setAmortisation($data['amortisation']);
            unset($data['amortisation']);
        }
        if (\array_key_exists('financialExpenses', $data)) {
            $object->setFinancialExpenses($data['financialExpenses']);
            unset($data['financialExpenses']);
        }
        if (\array_key_exists('profitBeforeTax', $data)) {
            $object->setProfitBeforeTax($data['profitBeforeTax']);
            unset($data['profitBeforeTax']);
        }
        if (\array_key_exists('tax', $data)) {
            $object->setTax($data['tax']);
            unset($data['tax']);
        }
        if (\array_key_exists('profitAfterTax', $data)) {
            $object->setProfitAfterTax($data['profitAfterTax']);
            unset($data['profitAfterTax']);
        }
        if (\array_key_exists('dividends', $data)) {
            $object->setDividends($data['dividends']);
            unset($data['dividends']);
        }
        if (\array_key_exists('minorityInterests', $data)) {
            $object->setMinorityInterests($data['minorityInterests']);
            unset($data['minorityInterests']);
        }
        if (\array_key_exists('otherAppropriations', $data)) {
            $object->setOtherAppropriations($data['otherAppropriations']);
            unset($data['otherAppropriations']);
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
        if ($data->isInitialized('revenue') && null !== $data->getRevenue()) {
            $dataArray['revenue'] = $data->getRevenue();
        }
        if ($data->isInitialized('operatingCosts') && null !== $data->getOperatingCosts()) {
            $dataArray['operatingCosts'] = $data->getOperatingCosts();
        }
        if ($data->isInitialized('operatingProfit') && null !== $data->getOperatingProfit()) {
            $dataArray['operatingProfit'] = $data->getOperatingProfit();
        }
        if ($data->isInitialized('wagesAndSalaries') && null !== $data->getWagesAndSalaries()) {
            $dataArray['wagesAndSalaries'] = $data->getWagesAndSalaries();
        }
        if ($data->isInitialized('pensionCosts') && null !== $data->getPensionCosts()) {
            $dataArray['pensionCosts'] = $data->getPensionCosts();
        }
        if ($data->isInitialized('depreciation') && null !== $data->getDepreciation()) {
            $dataArray['depreciation'] = $data->getDepreciation();
        }
        if ($data->isInitialized('amortisation') && null !== $data->getAmortisation()) {
            $dataArray['amortisation'] = $data->getAmortisation();
        }
        if ($data->isInitialized('financialExpenses') && null !== $data->getFinancialExpenses()) {
            $dataArray['financialExpenses'] = $data->getFinancialExpenses();
        }
        if ($data->isInitialized('profitBeforeTax') && null !== $data->getProfitBeforeTax()) {
            $dataArray['profitBeforeTax'] = $data->getProfitBeforeTax();
        }
        if ($data->isInitialized('tax') && null !== $data->getTax()) {
            $dataArray['tax'] = $data->getTax();
        }
        if ($data->isInitialized('profitAfterTax') && null !== $data->getProfitAfterTax()) {
            $dataArray['profitAfterTax'] = $data->getProfitAfterTax();
        }
        if ($data->isInitialized('dividends') && null !== $data->getDividends()) {
            $dataArray['dividends'] = $data->getDividends();
        }
        if ($data->isInitialized('minorityInterests') && null !== $data->getMinorityInterests()) {
            $dataArray['minorityInterests'] = $data->getMinorityInterests();
        }
        if ($data->isInitialized('otherAppropriations') && null !== $data->getOtherAppropriations()) {
            $dataArray['otherAppropriations'] = $data->getOtherAppropriations();
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss::class => false];
    }
}
