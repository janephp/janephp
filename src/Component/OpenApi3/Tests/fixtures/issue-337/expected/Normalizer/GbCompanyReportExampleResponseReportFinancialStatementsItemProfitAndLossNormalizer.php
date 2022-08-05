<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss();
        if (\array_key_exists('revenue', $data) && \is_int($data['revenue'])) {
            $data['revenue'] = (double) $data['revenue'];
        }
        if (\array_key_exists('operatingCosts', $data) && \is_int($data['operatingCosts'])) {
            $data['operatingCosts'] = (double) $data['operatingCosts'];
        }
        if (\array_key_exists('operatingProfit', $data) && \is_int($data['operatingProfit'])) {
            $data['operatingProfit'] = (double) $data['operatingProfit'];
        }
        if (\array_key_exists('wagesAndSalaries', $data) && \is_int($data['wagesAndSalaries'])) {
            $data['wagesAndSalaries'] = (double) $data['wagesAndSalaries'];
        }
        if (\array_key_exists('pensionCosts', $data) && \is_int($data['pensionCosts'])) {
            $data['pensionCosts'] = (double) $data['pensionCosts'];
        }
        if (\array_key_exists('depreciation', $data) && \is_int($data['depreciation'])) {
            $data['depreciation'] = (double) $data['depreciation'];
        }
        if (\array_key_exists('amortisation', $data) && \is_int($data['amortisation'])) {
            $data['amortisation'] = (double) $data['amortisation'];
        }
        if (\array_key_exists('financialExpenses', $data) && \is_int($data['financialExpenses'])) {
            $data['financialExpenses'] = (double) $data['financialExpenses'];
        }
        if (\array_key_exists('profitBeforeTax', $data) && \is_int($data['profitBeforeTax'])) {
            $data['profitBeforeTax'] = (double) $data['profitBeforeTax'];
        }
        if (\array_key_exists('tax', $data) && \is_int($data['tax'])) {
            $data['tax'] = (double) $data['tax'];
        }
        if (\array_key_exists('profitAfterTax', $data) && \is_int($data['profitAfterTax'])) {
            $data['profitAfterTax'] = (double) $data['profitAfterTax'];
        }
        if (\array_key_exists('dividends', $data) && \is_int($data['dividends'])) {
            $data['dividends'] = (double) $data['dividends'];
        }
        if (\array_key_exists('minorityInterests', $data) && \is_int($data['minorityInterests'])) {
            $data['minorityInterests'] = (double) $data['minorityInterests'];
        }
        if (\array_key_exists('otherAppropriations', $data) && \is_int($data['otherAppropriations'])) {
            $data['otherAppropriations'] = (double) $data['otherAppropriations'];
        }
        if (\array_key_exists('retainedProfit', $data) && \is_int($data['retainedProfit'])) {
            $data['retainedProfit'] = (double) $data['retainedProfit'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('revenue', $data)) {
            $object->setRevenue($data['revenue']);
        }
        if (\array_key_exists('operatingCosts', $data)) {
            $object->setOperatingCosts($data['operatingCosts']);
        }
        if (\array_key_exists('operatingProfit', $data)) {
            $object->setOperatingProfit($data['operatingProfit']);
        }
        if (\array_key_exists('wagesAndSalaries', $data)) {
            $object->setWagesAndSalaries($data['wagesAndSalaries']);
        }
        if (\array_key_exists('pensionCosts', $data)) {
            $object->setPensionCosts($data['pensionCosts']);
        }
        if (\array_key_exists('depreciation', $data)) {
            $object->setDepreciation($data['depreciation']);
        }
        if (\array_key_exists('amortisation', $data)) {
            $object->setAmortisation($data['amortisation']);
        }
        if (\array_key_exists('financialExpenses', $data)) {
            $object->setFinancialExpenses($data['financialExpenses']);
        }
        if (\array_key_exists('profitBeforeTax', $data)) {
            $object->setProfitBeforeTax($data['profitBeforeTax']);
        }
        if (\array_key_exists('tax', $data)) {
            $object->setTax($data['tax']);
        }
        if (\array_key_exists('profitAfterTax', $data)) {
            $object->setProfitAfterTax($data['profitAfterTax']);
        }
        if (\array_key_exists('dividends', $data)) {
            $object->setDividends($data['dividends']);
        }
        if (\array_key_exists('minorityInterests', $data)) {
            $object->setMinorityInterests($data['minorityInterests']);
        }
        if (\array_key_exists('otherAppropriations', $data)) {
            $object->setOtherAppropriations($data['otherAppropriations']);
        }
        if (\array_key_exists('retainedProfit', $data)) {
            $object->setRetainedProfit($data['retainedProfit']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRevenue()) {
            $data['revenue'] = $object->getRevenue();
        }
        if (null !== $object->getOperatingCosts()) {
            $data['operatingCosts'] = $object->getOperatingCosts();
        }
        if (null !== $object->getOperatingProfit()) {
            $data['operatingProfit'] = $object->getOperatingProfit();
        }
        if (null !== $object->getWagesAndSalaries()) {
            $data['wagesAndSalaries'] = $object->getWagesAndSalaries();
        }
        if (null !== $object->getPensionCosts()) {
            $data['pensionCosts'] = $object->getPensionCosts();
        }
        if (null !== $object->getDepreciation()) {
            $data['depreciation'] = $object->getDepreciation();
        }
        if (null !== $object->getAmortisation()) {
            $data['amortisation'] = $object->getAmortisation();
        }
        if (null !== $object->getFinancialExpenses()) {
            $data['financialExpenses'] = $object->getFinancialExpenses();
        }
        if (null !== $object->getProfitBeforeTax()) {
            $data['profitBeforeTax'] = $object->getProfitBeforeTax();
        }
        if (null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if (null !== $object->getProfitAfterTax()) {
            $data['profitAfterTax'] = $object->getProfitAfterTax();
        }
        if (null !== $object->getDividends()) {
            $data['dividends'] = $object->getDividends();
        }
        if (null !== $object->getMinorityInterests()) {
            $data['minorityInterests'] = $object->getMinorityInterests();
        }
        if (null !== $object->getOtherAppropriations()) {
            $data['otherAppropriations'] = $object->getOtherAppropriations();
        }
        if (null !== $object->getRetainedProfit()) {
            $data['retainedProfit'] = $object->getRetainedProfit();
        }
        return $data;
    }
}